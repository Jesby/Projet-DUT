<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',        
        'original_price',
        'selling_price',
        'quantite',
        'taxe',
        'status',
        'trending',
        'meta_title',
        'images',
        'meta_keywords',
        'meta_description',
        'images',
    ];

    public function category()
    {
         return $this->belongsTo(Category::class,'cate_id','id');
    }
   
}
