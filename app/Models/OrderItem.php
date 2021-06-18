<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'units', 'user_id', 'product_id', 'order_id', 'unit_price', 'total_items', 'subtotal'
    ];

    /**
     * Get the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the oferta.
     */
    public function oferta()
    {
        return $this->belongsTo(Oferta::class);
    }


    /**
     * Get the order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
