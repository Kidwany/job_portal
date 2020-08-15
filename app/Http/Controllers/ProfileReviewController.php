<?php

namespace App\Http\Controllers;

use App\ProfileReviews;
use App\Talented;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Helpers\DataArrayHelper;
use App\Http\Requests\Front\TalentedFrontFormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileReviewController extends Controller
{

    /**
     * @param Request $request
     * @return mixed
     */
    public function review(Request $request)
    {
        $request->validate([
            'rate'           => 'bail|required|max:200',
            'review'           => 'bail|required|max:1000',
        ], [], [
        ]);

        $review = new ProfileReviews();
        $review->company_id = Auth::guard('company')->user()->id;
        $review->user_id = $request->user_id;
        $review->rate = $request->rate;
        $review->review = $request->review;
        $review->save();

        return redirect('user-profile/' . $review->user_id);

    }
}
