<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class liste extends Model
{
    use HasFactory;
    protected $table = 'listes';
    protected $filliable = [
          'user_id',
          'prod_id',
    ];
    public function produits()
    {
        return $this->belongsTo(Product::class, 'prod_id','id');
    }
}
