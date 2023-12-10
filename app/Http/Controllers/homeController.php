<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        $reviews = Review::orderBy('created_at', 'DESC')->take(3)->get();
        return view('welcome', compact('reviews'));
    }
}
