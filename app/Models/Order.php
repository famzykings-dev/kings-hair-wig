<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'note',
        'cart_data',
        'payment_proof',
        'status',
    ];

    public function items()
{
    return $this->hasMany(OrderItem::class);
}
}