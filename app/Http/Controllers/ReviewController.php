<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('review_index');
    }
    
    public function review_index(){
        $reviews = Review::all();
        return view('reviews.review-index', compact('reviews'));
    }

    public function review_create(){
        return view('reviews.review-create');
    }

    public function review_store(ReviewRequest $request){
        $review = Review::create([
            'stars'=>$request->stars,
            'description'=>$request->description,
            'user_id' => Auth::user()->id,
        ]);
        
        return redirect(route('review_index'));
    }
}
