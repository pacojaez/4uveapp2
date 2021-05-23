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
        'name', 'description', 'short_description', 'product_image', 'product_image_2','product_image_3', 'user_image', 'user_image_2','user_image_3',
        'product_code','ficha_tecnica_1','ficha_tecnica_2','ficha_tecnica_3','lote_image', 'cb_unit', 'part_number', 'brand',
        'EAN13_individual', 'unidades_embalaje_individual', 'dimensions_boxes', 'weight', 'EAN-13_box_1', 'pack_units',
        'unidades_embalaje_2', 'dimensions_boxes_2', 'weight_2', 'EAN13_box_2',
        'unidades_embalaje_3', 'dimensions_boxes_3', 'weight_3', 'EAN13_box_3',
        'plazo_preparacion_pedido', 'contraoferta', 'localidad_recogida', 'cp_recogida', 'provincia_recogida','offer_units',
        'boxes_quantity', 'whole_box_dimensions', 'embalaje_original', 'provider', 'portes', 'invoice_cost_price',
        'buyed_date', 'boxes', 'offer', 'new', 'offer_until', 'offer_prize', 'definition',
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

    /**
     * Get the subcategorie.
     */
    public function porte()
    {
        return $this->belongsTo(Portes::class);
    }

    public static function search($search){

        // dd($search);
        /**
        *The function get a parameter from the View and retrieve the query from the DB
        */
        $result = empty($search) ? static::query()
                                : static::query()
                                        ->where('name', 'like', '%'.$search.'%')
                                        ->orWhere('localidad_recogida', 'like', '%'.$search.'%')
                                        ->orWhere('part_number', 'like', '%'.$search.'%')
                                        ->orWhere('brand', 'like', '%'.$search.'%')
                                        ->orWhere('EAN13_individual', 'like', '%'.$search.'%');

        $result->where('active', 1);
        return $result;

    }

 }


