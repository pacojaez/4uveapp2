<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'short_description', 'user_image', 'user_image_2','user_image_3',
        'plazo_preparacion_pedido', 'contraoferta', 'localidad_recogida', 'cp_recogida',
        'provincia_recogida','offer_units', 'boxes_quantity', 'whole_box_dimensions',
        'embalaje_original', 'provider', 'portes', 'invoice_cost_price', 'buyed_date',
        'boxes', 'offer', 'new', 'offer_until', 'offer_prize', 'definition',
        'porte_id', 'subcategorie_id', 'net_price', 'categoria_oferta', 'active',
        'product_id', 'user_id', 'portes'
    ];

    /**
     * Get the product of this subcategorie.
     */
    public function porte()
    {
        return $this->hasMany(Portes::class);
    }

    /**
     * Get the product of this subcategorie.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
