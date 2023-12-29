<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class UserController extends Controller
{
    public function profile(){
        $cart = Cart::all();
        $articles = Article::all();
        $userCart = collect([]);
        foreach($articles as $article){
            foreach($cart as $cartArticle){
                if($cartArticle->article_id == $article->id && $cartArticle->user_id == Auth::user()->id){
                    $userCart->push($article);
                }
            }
        }
        $articles = $userCart;
        return view('profile', compact('articles'));
    }

    public function update_profile(){
        return view('auth.update_profile');
    }
}
