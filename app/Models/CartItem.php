<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'units', 'user_id', 'product_id', 'order_id'
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
        return $this->hasOne(Product::class);
    }

    /**
     * Get the user.
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }


}
