<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'user_id',
    ];

    public static function countArticle(){
        return Cart::where('user_id', Auth::user()->id)->count();
    } 

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
