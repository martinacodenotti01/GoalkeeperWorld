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

    public function verification_notice(){
        return view('auth.verify-email');
    }

    public function verification_verify(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect(route('profile'));
    }

    public function verification_send(Request $request){
        $request->user()->sendEmailVerificationNotification();
        return redirect(route('homepage'))->with('message', 'Link di verifica inviato!');
    }
}
