<?php

namespace App\Http\Controllers;

use App\ProfileReviews;
use App\Talented;
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
}
