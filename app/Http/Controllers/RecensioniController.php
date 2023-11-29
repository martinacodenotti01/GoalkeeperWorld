<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class RecensioniController extends Controller
{
    public function reviews(){
        $reviews = Review::all();
        return view('reviews', compact('reviews'));
    }

    public function add_review(ReviewRequest $request){
        $request = Review::create([
            'name'=>$request->name,
            'stars'=>$request->stars,
            'description'=>$request->description
        ]);
        // $reviews = Review::all();
        return view('welcome');
    }
}
