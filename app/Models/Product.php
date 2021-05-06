<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Product extends Model
{
    use HasFactory;
    use Uuids;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'short_description', 'product_imager', 'lote_image', 'part_number', 'cb_unit', 'brand', 'pack_units', 'invoice_cost_price',
        'weight', 'provider', 'boxes', 'dimensions_boxes', 'portes', 'offer', 'new', 'origianl box', 'offer_until'
    ];

    /**
     * Get the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the subcategorie.
     */
    public function subcategorie()
    {
        return $this->belongsTo(Subcategorie::class);
    }
    
    
}
