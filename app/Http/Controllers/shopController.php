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
        $filtered = $articles;
        $filterByWord = collect([]);
        // word
        foreach($articles as $article){
            if(str_contains(strtolower($article->name), strtolower($filter['word']))){
                $filterByWord->push($article);
            }
        }
        $articles = $filterByWord;

        // category
        if($filter['category'] == 1){
            $filtered = $articles->filter(function ($articles){
                if($articles->category == 1){
                    return $articles;
                }
            });
            $articles = $filtered;
        }else if($filter['category'] == 2){
            $filtered = $articles->filter(function ($articles){
                if($articles->category == 2){
                    return $articles;
                }
            });
            $articles = $filtered;
        }else if($filter['category'] == 3){
            $filtered = $articles->filter(function ($article){
                if($article->category == 3){
                    return $article;
                }
            });
            $articles = $filtered;
        }

        // price 
        $price = $filter['price'];
        if($price != 1){
            $filterByPrice = collect([]);
            foreach($articles as $article){
                if($article->price >= $price && $article->price <= $price+50){
                    $filterByPrice->push($article);
                }
            }
            $articles = $filterByPrice;
        }
        
        return view('shop.shop-index', compact('articles'));
    }
}
