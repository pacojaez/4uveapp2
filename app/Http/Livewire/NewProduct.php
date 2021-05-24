<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Subcategorie;
use App\Models\Portes;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewProduct extends Component
{
    use WithFileUploads;

    public $product;

    public $product_image, $product_image_2, $product_image_3, $user_image, $user_image_2, $user_image_3;

    public $name, $description, $short_description, $product_code, $lote_image, $cb_unit, $part_number, $brand,
        $EAN13_individual, $unidades_embalaje_original, $dimensions_boxes, $weight, $pack_units,
        $unidades_embalaje_2, $dimensions_boxes_2, $weight_2, $unidades_embalaje_3, $dimensions_boxes_3, $weight_3,
        $plazo_preparacion_pedido, $contraoferta, $localidad_recogida, $cp_recogida, $provincia_recogida, $offer_units,
        $boxes_quantity, $whole_box_dimensions, $embalaje_original, $provider, $invoice_cost_price,
        $buyed_date, $boxes, $offer, $new, $offer_until, $offer_prize, $subcategorie_id, $net_price,
        $EAN13_box_1, $EAN13_box_2, $categoria_oferta;

    public $porte_id = 1;

    public $isOpen = false;

    public $processing = false;

    public $portes;
    public $subcategories;

    public function store()
    {
        $this->product = new Product;

        $data =  $this->validate([
            // Images:
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'product_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'product_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'user_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'user_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            //rest of the fields:
            'name' => 'string|nullable',
            'short_description' => 'string|nullable',
            'description' => 'string|nullable',
            'product_code' => 'string|nullable',
            'part_number'=> 'string|nullable',
            'brand' => 'string|nullable',
            'EAN13_individual' =>'string|nullable',
            'dimensions_boxes' => 'string|nullable',
            'unidades_embalaje_original' => 'string|nullable',
            'weight' => 'string|nullable',
            'pack_units' => 'string|nullable',
            'dimensions_boxes_2' => 'string|nullable',
            'weight_2' => 'string|nullable',
            'dimensions_boxes_3' => 'string|nullable',
            'weight_3' => 'string|nullable',
            'plazo_preparacion_pedido' => 'string|nullable',
            'offer_units' => 'string|nullable',
            'boxes_quantity' => 'string|nullable',
            'whole_box_dimensions' => 'string|nullable',
            'boxes_quantity' => 'string|nullable',
            'provider' => 'string|nullable',
            'invoice_cost_price' => 'string|nullable',
            'buyed_date' => 'date|nullable',
            'offer_until' => 'string|nullable',
            'localidad_recogida' => 'string|nullable',
            'cp_recogida' => 'string|nullable',
            'provincia_recogida' => 'string|nullable',
            'porte_id' => 'int|nullable',
            'subcategorie_id' => 'int|nullable',
            'net_price' => 'int|nullable',
            'EAN13_box_1' => 'string|nullable',
            'EAN13_box_2' => 'string|nullable',
            'categoria_oferta' => 'string|nullable',


        ]);

            //  dd($data['product_image']);
        //PROCESAMIENTO IMAGEN 1:
        if($data['product_image']){
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->product_image;
            $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
            $data['product_image'] = $name;
            $this->product->product_image = $data['product_image'];
        }

        if($data['product_image_2']){
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->product_image_2;
            $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
            $data['product_image_2'] = $name;
            $this->product->product_image_2 = $data['product_image_2'];
        }

        if($data['product_image_3']){
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->product_image_3;
            $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
            $data['product_image'] = $name;
            $this->product->product_image_3 = $data['product_image_3'];
        }

        if($data['user_image']){
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->user_image;
            $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
            $data['user_image'] = $name;
            $this->product->user_image = $data['user_image'];
        }

        if($data['user_image_2']){
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->user_image_2;
            $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
            $data['user_image_2'] = $name;
            $this->product->user_image_2 = $data['user_image_2'];
        }
        if($data['user_image_3']){
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->user_image_3;
            $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
            $data['user_image_2'] = $name;
            $this->product->user_image_3 = $data['user_image_3'];
        }

        $this->product->user_id = Auth::user()->id;

        if( $data['porte_id'] == null){
            $data['porte_id'] = 1;
        }

        $this->product->subcategorie_id = $this->subcategorie_id;

        //***ojo solo para pruebas*/
        $this->product->active = 1;
        //***ojo solo para pruebas*/

        // dd($data);

        $createFields = array_filter($data, null);
        // dd($createFields['subcategorie_id']);
        // $product = Product::find($this->product);
        foreach( $createFields as $key => $value){
            $this->product->$key = $value;
            $this->product->save();
        }

        // dd($this->product);

        $this->processing = false;

        return redirect()->route('products.index', [
            'subcategorie' => Subcategorie::all(),
            'portes' => Portes::all(),
        ]);
    }

    public function mount()
    {
        $this->subcategories = Subcategorie::all();
        $this->portes = Portes::all();
        // dd($this->portes);
    }

    public function render()
    {
        return view('livewire.new-product');
    }
}
