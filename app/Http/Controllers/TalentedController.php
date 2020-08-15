<?php

namespace App\Http\Controllers;

use App\Talented;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Helpers\DataArrayHelper;
use App\Http\Requests\Front\TalentedFrontFormRequest;

class TalentedController extends Controller
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
        $degrees = DataArrayHelper::langDegreelevelsArray();
        $countries = DataArrayHelper::defaultCountriesArray();
        $industries = DataArrayHelper::defaultIndustriesArray();
        $upload_max_filesize = UploadedFile::getMaxFilesize() / (1048576);
        
        return view('website.talented')
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
    public function store(TalentedFrontFormRequest $request)
    {
        $birth_date = date('Y-m-d', strtotime($request->input('date_of_birth')));
        $talented = new Talented();

        $talented->first_name = $request->input('first_name');
        $talented->last_name = $request->input('last_name');
        $talented->email = $request->input('email');

        $talented->date_of_birth = $birth_date;
        $talented->gender_id = $request->input('gender_id');
        $talented->marital_status_id = $request->input('marital_status_id');
                
        $talented->country_id = $request->input('country_id');
        $talented->state_id = $request->input('state_id');
        $talented->city_id = $request->input('city_id');

        $talented->nationality_id = $request->input('nationality_id');
        $talented->industry_id = $request->input('industry_id');
        $talented->national_id_card_number = $request->input('national_id_card_number');
        
        $talented->phone = $request->input('phone');
        $talented->mobile_num = $request->input('mobile_num');
        $talented->street_address = $request->input('street_address');

        $talented->save();
        
        flash('Talented has been added!')->success();
        return view('talented.store', compact('talented'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Talented  $talented
     * @return \Illuminate\Http\Response
     */
    public function show(Talented $talented)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Talented  $talented
     * @return \Illuminate\Http\Response
     */
    public function edit(Talented $talented)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Talented  $talented
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talented $talented)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Talented  $talented
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talented $talented)
    {
        //
    }
}
