<?php
namespace App\Http\Controllers;

use App\Models\Article;
use GuzzleHttp\Psr7\Request as Psr7Request;
use lluminate\Http\Request;

class ShopController extends Controller
{
    public function shop_index(){
        $articles = Article::all();
        return view('shop.shop-index', compact('articles'));
    }

    public function article_show(Article $article){
        return view('shop.article-show', compact('article'));
    }
}
