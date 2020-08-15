<?php

namespace App\Http\Controllers;

use App\Country;
use App\Traveler;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Helpers\DataArrayHelper;
use App\Http\Requests\Front\TravelerFrontFormRequest;

class TravelerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->create();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = DataArrayHelper::langGendersArray();
        $maritalStatuses = DataArrayHelper::langMaritalStatusesArray();
        $nationalities = DataArrayHelper::langNationalitiesArray();
        $functionalAreas = DataArrayHelper::langFunctionalAreasArray();
        $countries = DataArrayHelper::arabicLangCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $degrees = DataArrayHelper::langDegreelevelsArray();
        $upload_max_filesize = UploadedFile::getMaxFilesize() / (1048576);
        
        return view('website.travelEurope')
                ->with('genders', $genders)
                ->with('maritalStatuses', $maritalStatuses)
                ->with('nationalities', $nationalities)
                ->with('countries', $countries)
                ->with('industries', $industries)
                ->with('degrees', $degrees)
                ->with('functionalAreas', $functionalAreas)
                ->with('upload_max_filesize', $upload_max_filesize);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelerFrontFormRequest $request)
    {

        //return $request->all();
        $traveler = new Traveler();

        $traveler->first_name = $request->input('first_name');
        $traveler->last_name = $request->input('last_name');
        $traveler->email = $request->input('email');

        $traveler->date_of_birth = $request->input('date_of_birth');
        $traveler->gender_id = $request->input('gender_id');
        $traveler->marital_status_id = $request->input('marital_status_id');
                
        $traveler->country_id = $request->input('country_id');
        $traveler->state_id = $request->input('state_id');
        $traveler->city_id = $request->input('city_id');

        $traveler->nationality_id = $request->input('nationality_id');
        $traveler->industry_id = $request->input('industry_id');
        $traveler->functional_area_id = $request->input('functional_area_id');
        $traveler->degree_id = $request->input('degree_id');
        $traveler->type_id = $request->input('type_id');
        $traveler->national_id_card_number = $request->input('national_id_card_number');
        
        $traveler->phone = $request->input('phone');
        $traveler->mobile_num = $request->input('mobile_num');
        $traveler->street_address = $request->input('street_address');

        $traveler->save();


        
        flash('Your Information has been saved successfully... We will contact you soon!')->success();
        return redirect('traveling-to-europe');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function show(Traveler $traveler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function edit(Traveler $traveler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traveler $traveler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traveler $traveler)
    {
        //
    }
}
