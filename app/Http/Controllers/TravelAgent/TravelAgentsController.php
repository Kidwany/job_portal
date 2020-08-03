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

class TravelAgentsController extends Controller
{

    use TravelAgentTrait;
    use Cron;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    public function index()
    {
        return view('travel_agent_home');
    }

    public function travel_agent_listing(Request $request)
    {
        $search = $request->get('search');
        $country_ids = $request->query('country_id', array());
        $state_ids = $request->query('state_id', array());
        $query = TravelAgent::where('type', '=', 'travel_agent')->select('*');
        if ($search != '') {
            $query->where('name', 'like', '%' . $search . '%');
        }

        if (!empty($country_ids)) {
            $query->where('country_id', $country_ids[0]);
        }

        if (!empty($state_ids)) {
            $query->where('state_id', $state_ids[0]);
        }
       
        $data['travel_agents'] = $query->paginate(15);
        $countries = DataArrayHelper::langCountriesArray();
        return view('travel_agent.listing')
        ->with('countries', $countries)
        ->with($data);
    }

}
