<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articoloController extends Controller
{
    public function dettaglio($nomeArticolo){
        $annunci = [
            [
                'img' => '/media/annunci/guantiReush1.jpeg',
                'name' => 'Guanti portiere Reush',
                'price' => 80,
            ],
            [
                'img' => '/media/annunci/nikeMercurial1.jpeg',
                'name' => 'Nike Mercurial',
                'price' => 127,
            ],
            [
                'img' => '/media/annunci/adidasPredator1.jpeg',
                'name' => 'Adidas Predator',
                'price' => 95,
            ],
            [
                'img' => '/media/annunci/jomaAguilla1.jpeg',
                'name' => 'Joma Aguila',
                'price' => 55,
            ],
            [
                'img' => '/media/annunci/magliaJoma1.jpeg',
                'name' => 'Maglia portiere Joma',
                'price' => 30,
            ],
            [
                'img' => '/media/annunci/gomitiereUhlsport.jpeg',
                'name' => 'Gomitiere portiere Uhsport',
                'price' => 25,
            ],
            
        ];
        foreach($annunci as $annuncio){
            if($annuncio['name'] == $nomeArticolo){
                return view('dettaglio', ['annuncio' => $annuncio]);
            }
        }

        abort(404);
    }
}
