<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Subcategorie;
use App\Models\Portes;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
        $buyed_date, $boxes, $offer, $new, $offer_until, $offer_prize;

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
    public function update()
    {
        $id = Auth::id();

        $data = $this->validate([
            // Images:
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //rest of the fields:

        ]);
        // $this->processing = true;

        $image = $this->product_image;
        $image_2 = $this->product_image_2;
        $image_3 = $this->product_image_3;
        $user_image = $this->user_image;
        $user_image_2 = $this->user_image_2;
        $user_image_3 = $this->user_image_3;

        $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
        $name_2 = substr( uniqid(rand(), true), 8,8 ).'.'.$image_2->getClientOriginalExtension();
        $name_3 = substr( uniqid(rand(), true), 8,8 ).'.'.$image_3->getClientOriginalExtension();

        $name_user = substr( uniqid(rand(), true), 8,8 ).'.'.$user_image->getClientOriginalExtension();
        $name_user_2 = substr( uniqid(rand(), true), 8,8 ).'.'.$user_image_2->getClientOriginalExtension();
        $name_user_3 = substr( uniqid(rand(), true), 8,8 ).'.'.$user_image_3->getClientOriginalExtension();

        $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
            $c->aspectRatio();
            $c->upsize();
        });
        $img_2 = Image::make($image_2->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
            $c->aspectRatio();
            $c->upsize();
        });
        $img_3 = Image::make($image_3->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
            $c->aspectRatio();
            $c->upsize();
        });

        $img_user = Image::make($user_image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
            $c->aspectRatio();
            $c->upsize();
        });
        $img_user_2 = Image::make($user_image_2->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
            $c->aspectRatio();
            $c->upsize();
        });
        $img_user_3 = Image::make($user_image_3->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
            $c->aspectRatio();
            $c->upsize();
        });

        $img->stream();
        $img_2->stream();
        $img_3->stream();

        $img_user->stream();
        $img_user_2->stream();
        $img_user_3->stream();

        Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
        Storage::disk('local')->put('public/images/products'.'/'.$name_2, $img_2, 'public');
        Storage::disk('local')->put('public/images/products'.'/'.$name_3, $img_3, 'public');
        Storage::disk('local')->put('public/images/products'.'/'.$name_user, $img_user, 'public');
        Storage::disk('local')->put('public/images/products'.'/'.$name_user_2, $img_user_2, 'public');
        Storage::disk('local')->put('public/images/products'.'/'.$name_user_3, $img_user_3, 'public');
        // dd($data);

        $data['product_image'] = $name;
        $data['product_image_2'] = $name_2;
        $data['product_image_3'] = $name_3;
        $data['user_image'] = $name_user;
        $data['user_image_2'] = $name_user_2;
        $data['user_image_3'] = $name_user_3;

        $data['user_id'] = $id;

        $this->product->product_image = $data['product_image'];
        $this->product->product_image_2 = $data['product_image_2'];
        $this->product->product_image_3 = $data['product_image_3'];

        $this->product->user_image = $data['user_image'];
        $this->product->user_image_2 = $data['user_image_2'];
        $this->product->user_image_3 = $data['user_image_3'];
// dd($this->product->product_image_3);
        $this->product->save();

        // $this->processing = false;

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
