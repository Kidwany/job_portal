<?php

use Illuminate\Support\Facades\Route;


Route::get('company/register', 'Company\Auth\RegisterController@showRegistrationForm')->name('company.register');

Route::get('company/login', 'Company\Auth\LoginController@showLoginForm')->name('company.login');

Route::get('travel-agent/register', 'TravelAgent\Auth\RegisterController@showRegistrationForm')->name('travel.agent.register');

Route::get('travel-agent/login', 'TravelAgent\Auth\LoginController@showLoginForm')->name('travel.agent.login');
/*

  |--------------------------------------------------------------------------

  | Web Routes
filter.states.dropdown
  |--------------------------------------------------------------------------

  |

  | Here is where you can register web routes for your application. These

  | routes are loaded by the RouteServiceProvider within a group which

  | contains the "web" middleware group. Now create something great!

  |

 */

$real_path = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'front_routes' . DIRECTORY_SEPARATOR;

/* * ******** IndexController ************ */

Route::get('/', 'IndexController@index')->name('index');

Route::post('set-locale', 'IndexController@setLocale')->name('set.locale');

/* * ******** HomeController ************ */

Route::get('home', 'HomeController@index')->name('home');

/* * ******** TypeAheadController ******* */

Route::get('typeahead-currency_codes', 'TypeAheadController@typeAheadCurrencyCodes')->name('typeahead.currency_codes');

/* * ******** FaqController ******* */

Route::get('faq', 'FaqController@index')->name('faq');

/* * ******** CronController ******* */

Route::get('check-package-validity', 'CronController@checkPackageValidity');

/* * ******** Verification ******* */

Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');

Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');

Route::get('company-email-verification/error', 'Company\Auth\RegisterController@getVerificationError')->name('company.email-verification.error');

Route::get('company-email-verification/check/{token}', 'Company\Auth\RegisterController@getVerification')->name('company.email-verification.check');

/* * ***************************** */

// Sociallite Start

// OAuth Routes

Route::get('login/jobseeker/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('login/jobseeker/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/employer/{provider}', 'Company\Auth\LoginController@redirectToProvider');

Route::get('login/employer/{provider}/callback', 'Company\Auth\LoginController@handleProviderCallback');

// Sociallite End

/* * ***************************** */

Route::post('tinymce-image_upload-front', 'TinyMceController@uploadImage')->name('tinymce.image_upload.front');



Route::get('cronjob/send-alerts', 'AlertCronController@index')->name('send-alerts');



Route::post('subscribe-newsletter', 'SubscriptionController@getSubscription')->name('subscribe.newsletter');


/* * ******** OrderController ************ */

include_once($real_path . 'order.php');

/* * ******** CmsController ************ */

include_once($real_path . 'cms.php');

/* * ******** JobController ************ */

include_once($real_path . 'job.php');

/* * ******** ContactController ************ */

include_once($real_path . 'contact.php');

/* * ******** TravelAgentController ************ */
include_once($real_path . 'travel_agent.php');

/* * ******** ContactController ************ */
include_once($real_path . 'talented_people.php');

/* * ******** Company Auth ************ */
include_once($real_path . 'travel_agent_auth.php');

/* * ******** CompanyController ************ */

include_once($real_path . 'company.php');

/* * ******** AjaxController ************ */

include_once($real_path . 'ajax.php');

/* * ******** UserController ************ */

include_once($real_path . 'site_user.php');

/* * ******** User Auth ************ */

Auth::routes();

/* * ******** Company Auth ************ */

include_once($real_path . 'company_auth.php');

/* * ******** Admin Auth ************ */

include_once($real_path . 'admin_auth.php');

Route::get('blog', 'BlogController@index')->name('blogs');

Route::get('blog/search', 'BlogController@search')->name('blog-search');

Route::get('blog/{slug}', 'BlogController@details')->name('blog-detail');

Route::get('/blog/category/{blog}', 'BlogController@categories')->name('blog-category');

Route::get('/company-change-message-status', 'CompanyMessagesController@change_message_status')->name('company-change-message-status');

Route::get('/seeker-change-message-status', 'Job\SeekerSendController@change_message_status')->name('seeker-change-message-status');

Route::get('/sitemap', 'SitemapController@index');

Route::get('/sitemap/companies', 'SitemapController@companies');

Route::get('traveling-to-europe', 'TravelerController@create')->name('traveling.to.europe');

Route::resource('talented', 'TalentedController');

Route::resource('youth', 'YouthController');

Route::resource('traveler', 'TravelerController');

Route::resource('traveler', 'TravelerController');

Route::post('profile-review', 'ProfileReviewController@review');

Route::get('certificate', 'Certificate@index');

Route::post('certificate/store', 'Certificate@store');

/*Route::get('test', function (){
    //return \Illuminate\Support\Facades\Auth::id();
   $user = \App\Company::find(21);
   if ($user->isOnline())
   {
       return 1;
   }
   else
   {
       return 0;
   }
   //return $user;
});*/

Route::get('/clear-cache', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    return "Cache is cleared";
});

