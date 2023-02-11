<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
class OderItem extends Model
{
    use HasFactory;
    protected $table = 'order_item';
    protected $fillable = [
        'order_id',
        'prod_id',
        'quantite',
        'price',
        'totall',
       
    ];
      public function prod() : BelongsTo
       {
            return $this->belongsTo(Product::class,'prod_id','id');
      }
}
