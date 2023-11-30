<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Auth;

class RecensioniController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('reviews');
    }
    
    public function reviews(){
        $reviews = Review::all();
        return view('reviews.reviews', compact('reviews'));
    }

    public function add_review(){
        return view('reviews.add_review');
    }

    public function added_review(ReviewRequest $request){
        $request = Review::create([
            'name'=>$request->name,
            'stars'=>$request->stars,
            'description'=>$request->description
        ]);

        return redirect(route('reviews'));
    }
}
