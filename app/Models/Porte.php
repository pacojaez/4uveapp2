<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porte extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo',
    ];

    /**
     * Get the product of this product.
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }

     /**
     * Get the product of this product.
     */
    public function oferta()
    {
        return $this->hasMany(Product::class);
    }
}
