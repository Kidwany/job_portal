<?php

namespace App\Http\Controllers\Admin;

use App\Certificate;
use App\Traveler;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;
use App\Blog_category;
use App\Helpers\DataArrayHelper;
use Image;

class ConsultationController extends Base
{
    public function index($type)
    {
        $requests = Traveler::all()->where('type_id', $type);
        return view('admin.consultation.index', compact('requests'));
    }
}