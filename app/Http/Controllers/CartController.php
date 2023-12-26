<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\cart;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart_index(){
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
        return view('shop.cart-index', compact('articles'));
    }

    public function addToCart(Article $article){
        $contains = Cart::where('article_id', $article->id && 'user_id', Auth::user()->id)->get();
        if(count($contains) == 0){
            $cart = Cart::create([
                'user_id' => Auth::user()->id,
                'article_id' => $article->id,
            ]);
        }
        $added = true;
        return redirect(route('article_show', compact('article', 'added')))->with('message', 'Articolo aggiunto al carrello!');
    }

    public function removeToCart(Article $article){
        $cart = Cart::all();
        foreach($cart as $cartArticle){
            if($cartArticle->user_id == Auth::user()->id && $cartArticle->article_id == $article->id){
                $cartArticle->delete();
            }
        }
        return redirect(route('article_show', compact('article')))->with('message', 'Articolo rimosso dal carrello!');
    }
}
