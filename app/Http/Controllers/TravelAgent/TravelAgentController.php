<?php

namespace App\Http\Controllers\TravelAgent;

use Mail;
use Hash;
use File;
use ImgUploader;
use Auth;
use Validator;
use DB;
use Input;
use Redirect;
use App\Subscription;
use Newsletter;
use App\User;
use App\TravelAgent;
use App\TravelAgentMessage;
use App\ApplicantMessage;
use App\Country;
use App\CountryDetail;
use App\State;
use App\City;
use App\Industry;
use App\FavouriteTravelAgent;
use App\FavouriteApplicant;
use App\OwnershipType;
use App\JobApply;
use Carbon\Carbon;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use App\Mail\TravelAgentContactMail;
use App\Mail\ApplicantContactMail;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\Front\TravelAgentFrontFormRequest;
use App\Http\Controllers\Controller;
use App\Traits\TravelAgentTrait;
use App\Traits\Cron;

class TravelAgentController extends Controller
{

    use TravelAgentTrait;
    use Cron;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('travel_agent', ['except' => ['travel_agentDetail', 'sendContactForm']]);
        $this->runCheckPackageValidity();
    }

    public function index()
    {
        return view('travel_agent_home');
    }
    public function travelAgent_listing()
    {
        $data['travel_agents'] = TravelAgent::paginate(20);
        return view('travel_agent.listing')->with($data);
    }

    public function travelAgentProfile()
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();
        $travel_agent = TravelAgent::findOrFail(Auth::guard('travel_agent')->user()->id);
        return view('travel_agent.edit_profile')
                        ->with('travel_agent', $travel_agent)
                        ->with('countries', $countries)
                        ->with('industries', $industries)
                        ->with('ownershipTypes', $ownershipTypes);
    }

    public function updateTravelAgentProfile(TravelAgentFrontFormRequest $request)
    {
        $travel_agent = TravelAgent::findOrFail(Auth::guard('travel_agent')->user()->id);
        /*         * **************************************** */
        if ($request->hasFile('logo')) {
            $is_deleted = $this->deleteTravelAgentLogo($travel_agent->id);
            $image = $request->file('logo');
            $fileName = ImgUploader::UploadImage('travel_agent_logos', $image, $request->input('name'), 300, 300, false);
            $travel_agent->logo = $fileName;
        }
        /*         * ************************************** */
        $travel_agent->name = $request->input('name');
        $travel_agent->email = $request->input('email');
        if (!empty($request->input('password'))) {
            $travel_agent->password = Hash::make($request->input('password'));
        }
        $travel_agent->ceo = $request->input('ceo');
        $travel_agent->industry_id = $request->input('industry_id');
        $travel_agent->ownership_type_id = $request->input('ownership_type_id');
        $travel_agent->description = $request->input('description');
        $travel_agent->location = $request->input('location');
        $travel_agent->map = $request->input('map');
        $travel_agent->no_of_offices = $request->input('no_of_offices');
        $website = $request->input('website');
        $travel_agent->website = (false === strpos($website, 'http')) ? 'http://' . $website : $website;
        $travel_agent->no_of_employees = $request->input('no_of_employees');
        $travel_agent->established_in = $request->input('established_in');
        $travel_agent->fax = $request->input('fax');
        $travel_agent->phone = $request->input('phone');
        $travel_agent->facebook = $request->input('facebook');
        $travel_agent->twitter = $request->input('twitter');
        $travel_agent->linkedin = $request->input('linkedin');
        $travel_agent->google_plus = $request->input('google_plus');
        $travel_agent->pinterest = $request->input('pinterest');
        $travel_agent->country_id = $request->input('country_id');
        $travel_agent->state_id = $request->input('state_id');
        $travel_agent->city_id = $request->input('city_id');
		$travel_agent->is_subscribed = $request->input('is_subscribed', 0);
		
        $travel_agent->slug = str_slug($travel_agent->name, '-') . '-' . $travel_agent->id;
        $travel_agent->update();
		/*************************/
		Subscription::where('email', 'like', $travel_agent->email)->delete();
		if((bool)$travel_agent->is_subscribed)
		{			
			$subscription = new Subscription();
			$subscription->email = $travel_agent->email;
			$subscription->name = $travel_agent->name;
			$subscription->save();
			/*************************/
			Newsletter::subscribeOrUpdate($subscription->email, ['FNAME'=>$subscription->name]);
			/*************************/
		}
		else
		{
			/*************************/
			Newsletter::unsubscribe($travel_agent->email);
			/*************************/
		}

        
        flash(__('TravelAgent has been updated'))->success();
        return \Redirect::route('travel.agent.profile');
    }

    public function travelAgentDetail(Request $request, $travel_agent_slug)
    {
        $travel_agent = TravelAgent::where('slug', 'like', $travel_agent_slug)->firstOrFail();
        /*         * ************************************************** */
        $seo = $this->getTravelAgentSEO($travel_agent);
        /*         * ************************************************** */
        return view('travel_agent.detail')
                        ->with('travel_agent', $travel_agent)
                        ->with('seo', $seo);
    }

    public function sendContactForm(Request $request)
    {
        $msgresponse = Array();
        $rules = array(
            'from_name' => 'required|max:100|between:4,70',
            'from_email' => 'required|email|max:100',
            'subject' => 'required|max:200',
            'message' => 'required',
            'to_id' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        );
        $rules_messages = array(
            'from_name.required' => __('Name is required'),
            'from_email.required' => __('E-mail address is required'),
            'from_email.email' => __('Valid e-mail address is required'),
            'subject.required' => __('Subject is required'),
            'message.required' => __('Message is required'),
            'to_id.required' => __('Recieving TravelAgent details missing'),
            'g-recaptcha-response.required' => __('Please verify that you are not a robot'),
            'g-recaptcha-response.captcha' => __('Captcha error! try again'),
        );
        $validation = Validator::make($request->all(), $rules, $rules_messages);
        if ($validation->fails()) {
            $msgresponse = $validation->messages()->toJson();
            echo $msgresponse;
            exit;
        } else {
            $receiver_travel_agent = TravelAgent::findOrFail($request->input('to_id'));
            $data['company_id'] = $request->input('company_id');
            $data['travel_agent_name'] = $request->input('travel_agent_name');
            $data['from_id'] = $request->input('from_id');
            $data['to_id'] = $request->input('to_id');
            $data['from_name'] = $request->input('from_name');
            $data['from_email'] = $request->input('from_email');
            $data['from_phone'] = $request->input('from_phone');
            $data['subject'] = $request->input('subject');
            $data['message_txt'] = $request->input('message');
            $data['to_email'] = $receiver_travel_agent->email;
            $data['to_name'] = $receiver_travel_agent->name;
            $msg_save = TravelAgentMessage::create($data);
            $when = Carbon::now()->addMinutes(5);
            Mail::send(new TravelAgentContactMail($data));
            $msgresponse = ['success' => 'success', 'message' => __('Message sent successfully')];
            echo json_encode($msgresponse);
            exit;
        }
    }

    public function travelAgentMessages()
    {
        $travel_agent = TravelAgent::findOrFail(Auth::guard('travel_agent')->user()->id);
        $messages = TravelAgentMessage::where('company_id', '=', $travel_agent->id)
                ->orderBy('is_read', 'asc')
                ->orderBy('created_at', 'desc')
                ->get();

        return view('travel_agent.travel_agent_messages')
                        ->with('travel_agent', $travel_agent)
                        ->with('messages', $messages);
    }

    public function travelAgentMessageDetail($message_id)
    {
        $travel_agent = TravelAgent::findOrFail(Auth::guard('travel_agent')->user()->id);
        $message = TravelAgentMessage::findOrFail($message_id);
        $message->update(['is_read' => 1]);

        return view('travel_agent.travel_agent_message_detail')
                        ->with('travel_agent', $travel_agent)
                        ->with('message', $message);
    }

}
