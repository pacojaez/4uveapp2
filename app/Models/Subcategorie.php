<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorie extends Model
{
    use HasFactory;

    /**
     * Get the product of this subcategorie.
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
