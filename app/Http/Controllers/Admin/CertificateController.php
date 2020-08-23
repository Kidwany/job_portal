<?php

namespace App\Http\Controllers\Admin;

use App\Certificate;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;
use App\Blog_category;
use App\Helpers\DataArrayHelper;
use Image;

class CertificateController extends Base
{
    public function index()
    {
        $requests = Certificate::orderBy('created_at', 'desc')->get();
        return view('admin.certificates.index', compact('requests'));
    }
}