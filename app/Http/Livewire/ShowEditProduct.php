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

class ShowEditProduct extends Component
{

    use WithFileUploads;

    public $product;

    public $product_image, $product_image_2, $product_image_3, $user_image, $user_image_2, $user_image_3;

    public $name, $description, $short_description, $product_code, $lote_image, $cb_unit, $part_number, $brand,
        $EAN13_individual, $unidades_embalaje_individual, $dimensions_boxes, $weight, $pack_units,
        $unidades_embalaje_2, $dimensions_boxes_2, $weight_2, $unidades_embalaje_3, $dimensions_boxes_3, $weight_3,
        $plazo_preparacion_pedido, $contraoferta, $localidad_recogida, $cp_recogida, $provincia_recogida, $offer_units,
        $boxes_quantity, $whole_box_dimensions, $embalaje_original, $provider, $invoice_cost_price,
        $buyed_date, $boxes, $offer, $new, $offer_until, $offer_prize, $porte_id, $subcategorie_id;

    public $isOpen = false;

    public $processing = false;

    public $portes;
    public $subcategories;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    // public function mount($product){
    //     $this->product = Product::findOrFail($id);
    // }
    public function update(Request $request)
    {

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
            'unidades_embalaje_individual' => 'string|nullable',
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

        ]);

        //  dd($data['product_image']);
        // dd('$this '.$this->product_image);


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
            $data['product_image_3'] = $name;
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
            $data['user_image_3'] = $name;
            $this->product->user_image_3 = $data['user_image_3'];
        }



        // $image = $this->product_image;
        // $image_2 = $this->product_image_2;
        // $image_3 = $this->product_image_3;
        // $user_image = $this->user_image;
        // $user_image_2 = $this->user_image_2;
        // $user_image_3 = $this->user_image_3;

        // $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
        // $name_2 = substr( uniqid(rand(), true), 8,8 ).'.'.$image_2->getClientOriginalExtension();
        // $name_3 = substr( uniqid(rand(), true), 8,8 ).'.'.$image_3->getClientOriginalExtension();

        // $name_user = substr( uniqid(rand(), true), 8,8 ).'.'.$user_image->getClientOriginalExtension();
        // $name_user_2 = substr( uniqid(rand(), true), 8,8 ).'.'.$user_image_2->getClientOriginalExtension();
        // $name_user_3 = substr( uniqid(rand(), true), 8,8 ).'.'.$user_image_3->getClientOriginalExtension();

        // $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
        //     $c->aspectRatio();
        //     $c->upsize();
        // });
        // $img_2 = Image::make($image_2->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
        //     $c->aspectRatio();
        //     $c->upsize();
        // });
        // $img_3 = Image::make($image_3->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
        //     $c->aspectRatio();
        //     $c->upsize();
        // });

        // $img_user = Image::make($user_image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
        //     $c->aspectRatio();
        //     $c->upsize();
        // });
        // $img_user_2 = Image::make($user_image_2->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
        //     $c->aspectRatio();
        //     $c->upsize();
        // });
        // $img_user_3 = Image::make($user_image_3->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
        //     $c->aspectRatio();
        //     $c->upsize();
        // });

        // $img->stream();
        // $img_2->stream();
        // $img_3->stream();

        // $img_user->stream();
        // $img_user_2->stream();
        // $img_user_3->stream();

        // Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
        // Storage::disk('local')->put('public/images/products'.'/'.$name_2, $img_2, 'public');
        // Storage::disk('local')->put('public/images/products'.'/'.$name_3, $img_3, 'public');
        // Storage::disk('local')->put('public/images/products'.'/'.$name_user, $img_user, 'public');
        // Storage::disk('local')->put('public/images/products'.'/'.$name_user_2, $img_user_2, 'public');
        // Storage::disk('local')->put('public/images/products'.'/'.$name_user_3, $img_user_3, 'public');
        // // dd($data);

        // $data['product_image'] = $name;
        // $data['product_image_2'] = $name_2;
        // $data['product_image_3'] = $name_3;
        // $data['user_image'] = $name_user;
        // $data['user_image_2'] = $name_user_2;
        // $data['user_image_3'] = $name_user_3;

        // $this->product->product_image = $data['product_image'];
        // $this->product->product_image_2 = $data['product_image_2'];
        // $this->product->product_image_3 = $data['product_image_3'];

        // $this->product->user_image = $data['user_image'];
        // $this->product->user_image_2 = $data['user_image_2'];
        // $this->product->user_image_3 = $data['user_image_3'];
        // dd($this->product->product_image_3);

        $updateFields = array_filter($data, null);
        // dd($updateFields);
        // $product = Product::find($this->product);
        foreach( $updateFields as $key => $value){
            $this->product->$key = $value;
            $this->product->save();
        }

        $this->processing = false;

        return redirect()->route('products.index');
    }


    public function delete($id)
    {
        Product::find($id)->delete();

        return redirect()->route('products.index');
    }

    public function mount($product)
    {
        $this->product = $product;
        $this->subcategories = Subcategorie::all();
        $this->portes = Portes::all();
        // dd($this->portes);
    }

    public function render()
    {

        return view('livewire.show-edit-product', [
            'product' => $this->product
        ]);
    }
}
