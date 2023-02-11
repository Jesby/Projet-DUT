<?php

namespace App\Models;
use App\Models\OderItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders_tables';
    protected $fillable = [
        'user_id',
        'noms',
        'prenoms',
        'email',
        'number',
        'addresse1',
        'address2',
        'ville',
        'residence',
        'pays',
        'codepin',
        'status',
        'message',
        'tracking_no',
        'prix_total',
    ];

    public function ordersitem()
    {
        return $this->hasMany(OderItem::class);
    }
}
