<?php

namespace App\Http\Controllers;

use Validator;
use DB;
use Input;
use Redirect;
use App\User;
use App\Subscription;
use App\Alert;
use Newsletter;
use App\Company;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    public function getSubscription(Request $request)
    {
        $msgresponse = array();
        $validate = $request->validate( [
            /*'name' => 'required|max:100|between:4,70',*/
            'email' => 'required|email|max:100',
        ], [], [
            'first_name'                =>  'Name',
            'email'                     =>  'Email',
            'date_of_birth'             =>  'Date of Birth',
            'gender_id'                 =>  'Gender',
            'marital_status_id'         =>  'Marital Status',
            'country_id'                =>  'Country',
            'state_id'                  =>  'State',
            'nationality_id'            =>  'Nationality',
            'industry_id'               =>  'Industry',
            'functional_area_id'        =>  'Functional Area',
            'degree_id'                 =>  'Degree',
            'phone'                     =>  'Phone',
        ]);

        $user = User::where('email', 'like', $request->input('email'))->first();
        if (null !== $user) {
            $user->is_subscribed = 1;
            $user->update();
        }

        $company = Company::where('email', 'like', $request->input('email'))->first();
        if (null !== $company) {
            $company->is_subscribed = 1;
            $company->update();
        }

        /*************************/
        Subscription::where('email', 'like', $request->input('email'))->delete();
        $subscription = new Subscription();
        $subscription->email = $request->input('email');
        $subscription->name = 'Subscriber';
        $subscription->save();
        /*************************/
        Newsletter::subscribeOrUpdate($subscription->email, ['FNAME' =>  'Subscriber']);
        /*************************/
        flash('Your Information has been saved successfully... We will contact you soon!')->success();

        return redirect('/')->with('create', 'You Have Been Subscribed Successfully');
    }
    public function submitAlert(Request $request)
    {
        /*************************/
        $msgresponse = array();
        $rules = array(
            'email' => 'required|email|max:100',
        );
        $rules_messages = array(
            'email.required' => __('E-mail address is required'),
        );
        $validation = Validator::make($request->all(), $rules, $rules_messages);
        if ($validation->fails()) {
            $msgresponse = $validation->messages()->toJson();
            echo $msgresponse;
            exit;
        } else {
            $subscription = new Alert();
            $subscription->email = $request->get('email');
            $subscription->country_id = $request->get('country_id');
            $subscription->search_title = $request->get('search');
            $subscription->name = $request->get('name');
            $subscription->state_id = $request->get('state_id');
            $subscription->city_id = $request->get('city_id');
            $subscription->functional_area_id = $request->get('functional_area_id');
            $subscription->save();
            /*************************/
            if ($subscription->save() == true) {
                $arr = array('msg' => 'Your Alert have successfully been posted. ', 'status' => true);
            }
            return Response()->json($arr);
        }
    }
}
