<?php

namespace App\Http\Controllers;


use File;
use ImgUploader;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Helpers\DataArrayHelper;
use App\Http\Requests\Front\TalentedFrontFormRequest;
use Illuminate\Support\Facades\Auth;

class Certificate extends Controller
{

    /**
     * @param Request $request
     * @return mixed
     */
    public function index()
    {
        return view('website.certificate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'bail|required|max:200',
            'email'             => 'bail|required|max:1000',
            'phone'             => 'bail|required|max:18',
            'address'           => 'bail|required|max:200',
            'file'              => 'bail|required',
        ], [], [
        ]);

        $certificate = new \App\Certificate();
        $certificate->name = $request->name;
        $certificate->phone = $request->phone;
        $certificate->email = $request->email;
        $certificate->address = $request->address;
        if ($request->hasFile('file')) {
            //$is_deleted = $this->deleteCompanyLogo($company->id);
            $image = $request->file('file');
            $fileName = ImgUploader::UploadImage('certificate_files', $image, $request->input('name'), 300, 300, false);
            $certificate->file = $fileName;
        }
        $certificate->save();

        return redirect('certificate')->with('create', 'Your Request Has Been Updated Successfully');
    }
}
