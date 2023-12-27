<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class ShopController extends Controller
{
    public function shop_index(){
        $articles = Article::all();
        return view('shop.shop-index', compact('articles'));
    }
    
    public function article_show(Article $article){
        $contains = Cart::where('article_id', $article->id && 'user_id', Auth::user()->id)->get();
        if(count($contains) == 0){
            // se l'articolo non  è presente nel carrello added = true
            $added = false;
        }else{
            // se l'articolo è già presente nel carrello added = false
            $added = true;
        }
        return view('shop.article-show', compact('article', 'added'));
    }
    
    public function shop_filter(Request $filter){
        $articles = Article::all();
        // filtro per categoria
        if($filter['category'] != 0){
            $articles = $articles->where('category', $filter['category']);
        }
        // filtro per prezzo
        if($filter['price'] != 1){
            $articles = $articles->where('price', '>=', $filter['price'])->where('price', '<=', $filter['price']+50);
        }
        
        return view('shop.shop-index', compact('articles'));
    }

    public function searchArticle(Request $filter){
        $articles = Article::search($filter['searched'])->get();

        return view('shop.shop-index', compact('articles'));
    }
}
