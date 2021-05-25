<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    /**
     * Get the product of this subcategorie.
     */
    public function subcategorie()
    {
        return $this->hasMany(Subcategorie::class);
    }

    /**
     * Get the product of this subcategorie.
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategorie::class);
    }
}
