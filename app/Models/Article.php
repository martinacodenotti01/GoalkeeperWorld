<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'description',
        'price',
        'img',
        'category',
    ];

    public function toSearchableArray(){
        $array = $this->toArray();
        // $category = $this->category;
        $array = [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
        ];

        return $array;
    }
}

