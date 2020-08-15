<?php

namespace App\Http\Controllers\Admin;

use Hash;
use File;
use ImgUploader;
use Auth;
use DB;
use Input;
use Redirect;
use App\Package;
use App\TravelAgent;
use App\Country;
use App\State;
use App\City;
use App\Industry;
use App\OwnershipType;
use Carbon\Carbon;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DataTables;
use App\Http\Requests\TravelAgentFormRequest;
use App\Http\Controllers\Controller;
use App\Traits\TravelAgentTrait;
use App\Traits\TravelAgentPackageTrait;

class TravelAgentController extends Controller
{

    use TravelAgentTrait;
    use TravelAgentPackageTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function indexTravelAgents()
    {
        return view('admin.travel_agent.index');
    }

    public function createTravelAgent()
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();
        $packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->pluck('package_detail', 'id')->toArray();

        return view('admin.travel_agent.add')
                        ->with('countries', $countries)
                        ->with('industries', $industries)
                        ->with('ownershipTypes', $ownershipTypes)
                        ->with('packages', $packages);
    }

    public function storeTravelAgent(TravelAgentFormRequest $request)
    {
        $travel_agent = new TravelAgent();
        /*         * **************************************** */
        if ($request->hasFile('logo')) {
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
        $travel_agent->is_active = $request->input('is_active');
        $travel_agent->is_featured = $request->input('is_featured');
        $travel_agent->save();
        /*         * ******************************* */
        $travel_agent->slug = str_slug($travel_agent->name, '-') . '-' . $travel_agent->id;
        /*         * ******************************* */
        $travel_agent->update();
        /*         * ************************************ */
        if ($request->has('travel_agent_package_id') && $request->input('travel_agent_package_id') > 0) {
            $package_id = $request->input('travel_agent_package_id');
            $package = Package::find($package_id);
            $this->addTravelAgentPackage($travel_agent, $package);
        }
        /*         * ************************************ */
        flash('Travel Agent has been added!')->success();
        return \Redirect::route('edit.travel.agent', array($travel_agent->id));
    }

    public function editTravelAgent($id)
    {
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $ownershipTypes = DataArrayHelper::defaultOwnershipTypesArray();

        $travel_agent = TravelAgent::findOrFail($id);
        if ($travel_agent->package_id > 0) {
            $package = Package::find($travel_agent->package_id);
            $packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->where('id', '<>', $travel_agent->package_id)->where('package_price', '>=', $package->package_price)->pluck('package_detail', 'id')->toArray();
        } else {
            $packages = Package::select('id', DB::raw("CONCAT(`package_title`, ', $', `package_price`, ', Days:', `package_num_days`, ', Listings:', `package_num_listings`) AS package_detail"))->where('package_for', 'like', 'employer')->pluck('package_detail', 'id')->toArray();
        }

        return view('admin.travel_agent.edit')
                        ->with('travel_agent', $travel_agent)
                        ->with('countries', $countries)
                        ->with('industries', $industries)
                        ->with('ownershipTypes', $ownershipTypes)
                        ->with('packages', $packages);
    }

    public function updateTravelAgent($id, TravelAgentFormRequest $request)
    {
        $travel_agent = TravelAgent::findOrFail($id);
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
        $travel_agent->is_active = $request->input('is_active');
        $travel_agent->is_featured = $request->input('is_featured');

        $travel_agent->slug = str_slug($travel_agent->name, '-') . '-' . $travel_agent->id;
        $travel_agent->update();

        /*         * ************************************ */
        if ($request->has('travel_agent_package_id') && $request->input('travel_agent_package_id') > 0) {
            $package_id = $request->input('travel_agent_package_id');
            $package = Package::find($package_id);
            if ($travel_agent->package_id > 0) {
                $this->updateTravelAgentPackage($travel_agent, $package);
            } else {
                $this->addTravelAgentPackage($travel_agent, $package);
            }
        }
        /*         * ************************************ */
        flash('Travel Agent has been updated!')->success();
        return \Redirect::route('edit.travel.agent', array($travel_agent->id));
    }

    public function deleteTravelAgent(Request $request)
    {
        $id = $request->input('id');
        try {
            $travel_agent = TravelAgent::findOrFail($id);
            $this->deleteTravelAgentLogo($travel_agent->id);
            $travel_agent->delete();
            return 'ok';
        } catch (ModelNotFoundException $e) {
            return 'notok';
        }
    }

    public function fetchTravelAgentsData(Request $request)
    {
        $companies = TravelAgent::select([
                    'companies.id',
                    'companies.name',
                    'companies.email',
                    'companies.password',
                    'companies.ceo',
                    'companies.industry_id',
                    'companies.ownership_type_id',
                    'companies.description',
                    'companies.location',
                    'companies.no_of_offices',
                    'companies.website',
                    'companies.no_of_employees',
                    'companies.established_in',
                    'companies.fax',
                    'companies.phone',
                    'companies.logo',
                    'companies.country_id',
                    'companies.state_id',
                    'companies.city_id',
                    'companies.is_active',
                    'companies.is_featured',
        ])->where('type', '=', 'travel_agent');
        return Datatables::of($companies)
                        ->filter(function ($query) use ($request) {
                            if ($request->has('name') && !empty($request->name)) {
                                $query->where('companies.name', 'like', "%{$request->get('name')}%");
                            }
                            if ($request->has('email') && !empty($request->email)) {
                                $query->where('companies.email', 'like', "%{$request->get('email')}%");
                            }
                            if ($request->has('is_active') && $request->is_active != -1) {
                                $query->where('companies.is_active', '=', "{$request->get('is_active')}");
                            }
                            if ($request->has('is_featured') && $request->is_featured != -1) {
                                $query->where('companies.is_featured', '=', "{$request->get('is_featured')}");
                            }
                        })
                        ->addColumn('is_active', function ($companies) {
                            return ((bool) $companies->is_active) ? 'Yes' : 'No';
                        })
                        ->addColumn('is_featured', function ($companies) {
                            return ((bool) $companies->is_featured) ? 'Yes' : 'No';
                        })
                        ->addColumn('action', function ($companies) {
                            /*                             * ************************* */
                            $activeTxt = 'Make Active';
                            $activeHref = 'makeActive(' . $companies->id . ');';
                            $activeIcon = 'square-o';
                            if ((int) $companies->is_active == 1) {
                                $activeTxt = 'Make InActive';
                                $activeHref = 'makeNotActive(' . $companies->id . ');';
                                $activeIcon = 'check-square-o';
                            }
                            /*                             * ************************* */
                            $featuredTxt = 'Make Featured';
                            $featuredHref = 'makeFeatured(' . $companies->id . ');';
                            $featuredIcon = 'square-o';
                            if ((int) $companies->is_featured == 1) {
                                $featuredTxt = 'Make Not Featured';
                                $featuredHref = 'makeNotFeatured(' . $companies->id . ');';
                                $featuredIcon = 'check-square-o';
                            }
                            return '
				<div class="btn-group">
					<button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action
						<i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu">
						<li>
							<a href="' . route('list.jobs', ['company_id' => $companies->id]) . '" target="_blank"><i class="fa fa-list" aria-hidden="true"></i>List Jobs</a>
						</li>
						
						<li>
							<a href="' . route('edit.travel.agent', ['id' => $companies->id]) . '"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
						</li>						
						<li>
							<a href="javascript:void(0);" onclick="deleteTravelAgent(' . $companies->id . ');" class=""><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
						</li>
						
<li><a href="javascript:void(0);" onClick="' . $activeHref . '" id="onclickActive' . $companies->id . '"><i class="fa fa-' . $activeIcon . '" aria-hidden="true"></i>' . $activeTxt . '</a></li>
						
<li><a href="javascript:void(0);" onClick="' . $featuredHref . '" id="onclickFeatured' . $companies->id . '"><i class="fa fa-' . $featuredIcon . '" aria-hidden="true"></i>' . $featuredTxt . '</a></li>
					</ul>
				</div>';
                        })
                        ->rawColumns(['action', 'is_active', 'is_featured'])
                        ->setRowId(function($companies) {
                            return 'travel_agentDtRow' . $companies->id;
                        })
                        ->make(true);
        //$query = $dataTable->getQuery()->get();
        //return $query;
    }

    public function makeActiveTravelAgent(Request $request)
    {
        $id = $request->input('id');
        try {
            $travel_agent = TravelAgent::findOrFail($id);
            $travel_agent->is_active = 1;
            $travel_agent->update();
            echo 'ok';
        } catch (ModelNotFoundException $e) {
            echo 'notok';
        }
    }

    public function makeNotActiveTravelAgent(Request $request)
    {
        $id = $request->input('id');
        try {
            $travel_agent = TravelAgent::findOrFail($id);
            $travel_agent->is_active = 0;
            $travel_agent->update();
            echo 'ok';
        } catch (ModelNotFoundException $e) {
            echo 'notok';
        }
    }

    public function makeFeaturedTravelAgent(Request $request)
    {
        $id = $request->input('id');
        try {
            $travel_agent = TravelAgent::findOrFail($id);
            $travel_agent->is_featured = 1;
            $travel_agent->update();
            echo 'ok';
        } catch (ModelNotFoundException $e) {
            echo 'notok';
        }
    }

    public function makeNotFeaturedTravelAgent(Request $request)
    {
        $id = $request->input('id');
        try {
            $travel_agent = TravelAgent::findOrFail($id);
            $travel_agent->is_featured = 0;
            $travel_agent->update();
            echo 'ok';
        } catch (ModelNotFoundException $e) {
            echo 'notok';
        }
    }

}
