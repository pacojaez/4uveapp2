<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'user_id', 'units', 'total_factura'
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
        return $this->hasMany(Product::class);
    }

    /**
     * Get the user.
     */
    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
}
