<?php

use App\Models\Article;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * Run the migrations.
    */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->float('price', 8, 2);
            $table->string('img');
            $table->Integer('category')->default(1);
            $table->timestamps();
        });
        
        $articles = [
            Article::create([
                'name' => 'Guanti portiere Reush',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dicta laborum hic aperiam, sed temporibus delectus. Ducimus excepturi facere error vel fugiat inventore. Vel modi veniam fugiat dolores corporis iste.',
                'category' => 1,
                'img' => 'annunci/guantiReush1.jpeg',
                'price' => 80.50,
            ]),
            Article::create([
                'name' => 'Nike Mercurial',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dicta laborum hic aperiam, sed temporibus delectus. Ducimus excepturi facere error vel fugiat inventore. Vel modi veniam fugiat dolores corporis iste.',
                'category' => 3,
                'img' => 'annunci/nikeMercurial1.jpeg',
                'price' => 127.30,
            ]),
            Article::create([
                'name' => 'Adidas Predator',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dicta laborum hic aperiam, sed temporibus delectus. Ducimus excepturi facere error vel fugiat inventore. Vel modi veniam fugiat dolores corporis iste.',
                'category' => 3,
                'img' => 'annunci/adidasPredator1.jpeg',
                'price' => 95.90,
            ]),
            Article::create([
                'name' => 'Joma Aguila',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dicta laborum hic aperiam, sed temporibus delectus. Ducimus excepturi facere error vel fugiat inventore. Vel modi veniam fugiat dolores corporis iste.',
                'category' => 3,
                'img' => 'annunci/jomaAguilla1.jpeg',
                'price' => 55.50,
            ]),
            Article::create([
                'name' => 'Maglia portiere Joma',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dicta laborum hic aperiam, sed temporibus delectus. Ducimus excepturi facere error vel fugiat inventore. Vel modi veniam fugiat dolores corporis iste.',
                'category' => 2,
                'img' => 'annunci/magliaJoma1.jpeg',
                'price' => 30.10,
            ]),
            Article::create([
                'name' => 'Gomitiere portiere Uhsport',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dicta laborum hic aperiam, sed temporibus delectus. Ducimus excepturi facere error vel fugiat inventore. Vel modi veniam fugiat dolores corporis iste.',
                'category' => 2,
                'img' => 'annunci/gomitiereUhlsport.jpeg',
                'price' => 25.80,
            ]),
        ];
        
        foreach($articles as $article){
            Article::create([
                'name' => $article->name,
                'description' => $article->description,
                'price' => $article->price,
                'img' => $article->img,
                'category' => $article->category,
            ]);
        }
    }
    
    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
