<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Symfony\Component\HttpFoundation\Request;

class ShopController extends Controller
{
    public function shop_index(){
        $articles = Article::all();
        return view('shop.shop-index', compact('articles'));
    }
    
    public function article_show(Article $article){
        return view('shop.article-show', compact('article'));
    }
    
    public function shop_filter(Request $filter){
        $articles = Article::all();
        // filtro per categoria
        if($filter['category'] != 0){
            $articles = $articles->where('category', $filter['category']);
        }
        // filtro per prezzo
        if($filter['price'] != 1){
            $filtered = collect([]);
            foreach($articles as $article){
                if($article->price >= $filter['price'] && $article->price <= $filter['price']+50){
                    $filtered->push($article);
                }
            }
            $articles = $filtered;
        }
        
        // dd($articles);
        return view('shop.shop-index', compact('articles'));
    }
}
