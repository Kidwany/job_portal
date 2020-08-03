<?php

namespace App\Http\Controllers;

use App\Youth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Helpers\DataArrayHelper;
use App\Http\Requests\Front\YouthFrontFormRequest;

class YouthController extends Controller
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
        $countries = DataArrayHelper::defaultCountriesArray();
        // $countries = DataArrayHelper::langCountriesArray();
        $upload_max_filesize = UploadedFile::getMaxFilesize() / (1048576);
        
        return view('youth.create')
                ->with('genders', $genders)
                ->with('maritalStatuses', $maritalStatuses)
                ->with('nationalities', $nationalities)
                ->with('countries', $countries)
                ->with('upload_max_filesize', $upload_max_filesize);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(YouthFrontFormRequest $request)
    {
        $youth = new Youth();

        $youth->first_name = $request->input('first_name');
        $youth->last_name = $request->input('last_name');
        $youth->email = $request->input('email');

        $youth->date_of_birth = $request->input('date_of_birth');
        $youth->gender_id = $request->input('gender_id');
        $youth->marital_status_id = $request->input('marital_status_id');
                
        $youth->country_id = $request->input('country_id');
        $youth->state_id = $request->input('state_id');
        $youth->city_id = $request->input('city_id');

        $youth->nationality_id = $request->input('nationality_id');
        $youth->national_id_card_number = $request->input('national_id_card_number');
        
        $youth->phone = $request->input('phone');
        $youth->mobile_num = $request->input('mobile_num');
        $youth->street_address = $request->input('street_address');

        $youth->save();
        
        flash('Youth has been added!')->success();
        return view('youth.store', compact('youth'));
        // return \Redirect::route('youth.edit', array($youth->id));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Youth  $youth
     * @return \Illuminate\Http\Response
     */
    public function show(Youth $youth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Youth  $youth
     * @return \Illuminate\Http\Response
     */
    public function edit(Youth $youth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Youth  $youth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Youth $youth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Youth  $youth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Youth $youth)
    {
        //
    }
}
