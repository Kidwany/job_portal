<?php

namespace App\Http\Controllers\TravelAgent\Auth;

use App\Helpers\DataArrayHelper;
use Auth;
use App\TravelAgent;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use App\Http\Requests\Front\TravelAgentFrontRegisterFormRequest;
use Illuminate\Auth\Events\Registered;
use App\Events\TravelAgentRegistered;

class RegisterController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

    use RegistersUsers;
    use VerifiesUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $countries = DataArrayHelper::arabicLangCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        return view('travel_agent.auth.register', compact('countries', 'industries'));
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/travel-agent-home';
    protected $userTable = 'companies';
    protected $redirectIfVerified = '/travel-agent-home';
    protected $redirectAfterVerification = '/travel-agent-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('travel_agent.guest', ['except' => ['getVerification', 'getVerificationError']]);
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('travel_agent');
    }

    public function register(TravelAgentFrontRegisterFormRequest $request)
    {
        $travel_agent = new TravelAgent();
        $travel_agent->name = $request->input('name');
        $travel_agent->type = 'travel_agent';
        $travel_agent->email = $request->input('email');
        $travel_agent->password = bcrypt($request->input('password'));
        $travel_agent->phone = $request->input('phone');
        $travel_agent->website = $request->input('company_website');
        $travel_agent->country_id = $request->input('country_id');
        $travel_agent->industry_id = $request->input('industry_id');
        $travel_agent->is_active = 1;
        $travel_agent->verified = 0;
        $travel_agent->save();
        /*         * ******************** */
        $travel_agent->slug = str_slug($travel_agent->name, '-') . '-' . $travel_agent->id;
        $travel_agent->update();
        /*         * ******************** */

        /*event(new Registered($travel_agent));
        event(new TravelAgentRegistered($travel_agent));
        $this->guard()->login($travel_agent);
        UserVerification::generate($travel_agent);*/
        $this->guard()->login($travel_agent);
        // UserVerification::send($travel_agent, 'Travel Agent Verification', config('mail.recieve_to.address'), config('mail.recieve_to.name'));
        return $this->registered($request, $travel_agent) ?: redirect($this->redirectPath());
    }

}
