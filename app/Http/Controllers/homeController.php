<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function welcome(){
        $recensioni = [
            [
                'img' => '/media/donnarumma.png',
                'name' => 'Gianluigi Donnarumma',
                'description' => 'Lorem ipsum dolor sit amet.',
                'stelle' => 5,
            ],
            [
                'img' => '/media/giuliani.png',
                'name' => 'Laura Giuliani',
                'description' => 'Lorem ipsum dolor sit amet.',
                'stelle' => 5,
            ],
            [
                'img' => '/media/buffon.png',
                'name' => 'Gianluigi Buffon',
                'description' => 'Lorem ipsum dolor sit amet.',
                'stelle' => 5,
            ],
            [
                'img' => '/media/neuer.png',
                'name' => 'Manuel Neuer',
                'description' => 'Lorem ipsum dolor sit amet.',
                'stelle' => 4,
            ],
        ];
        return view('welcome', ['recensioni' => $recensioni]);
    }
}
