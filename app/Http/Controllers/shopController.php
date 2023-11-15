<?php
namespace App\Http\Controllers;
use lluminate\Http\Request;

class shopController extends Controller
{
    public function shop(){
        $annunci = [
            [
                'img' => './media/annunci/guantiReush1.jpeg',
                'name' => 'Guanti portiere Reush',
                'price' => 80,
            ],
            [
                'img' => './media/annunci/nikeMercurial1.jpeg',
                'name' => 'Nike Mercurial',
                'price' => 127,
            ],
            [
                'img' => './media/annunci/adidasPredator1.jpeg',
                'name' => 'Adidas Predator',
                'price' => 95,
            ],
            [
                'img' => './media/annunci/jomaAguilla1.jpeg',
                'name' => 'Joma Aguila',
                'price' => 55,
            ],
            [
                'img' => './media/annunci/magliaJoma1.jpeg',
                'name' => 'Maglia portiere Joma',
                'price' => 30,
            ],
            [
                'img' => './media/annunci/gomitiereUhlsport.jpeg',
                'name' => 'Gomitiere portiere Uhsport',
                'price' => 25,
            ],
            
        ];
        return view('shop', ['annunci' => $annunci]);
    }
}
