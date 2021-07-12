<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Subcategorie;
use App\Models\Porte;
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

    /**
     * The attributes that are mass assignable.
     */

    public $product_image , $product_image_2, $product_image_3;
    // public $user_image, $user_image_2, $user_image_3;

    public $name, $description, $short_description, $product_code, $subcategorie_id,
        $part_number, $brand, $EAN13_individual, $net_price, $unidades_embalaje_individual, $dimensions_boxes, $weight,
        $pack_units, $EAN13_box_1, $unidades_embalaje_2, $dimensions_boxes_2, $weight_2,
        $EAN13_box_2, $unidades_embalaje_3, $dimensions_boxes_3, $weight_3, $EAN13_box_3,
        $embalaje_original, $active;

    public $isOpen = false;

    public $processing = false;

    public $portes;
    public $subcategories;

    /**
     * Rules to validete the form fields of the Product Update Form
     *
     * @var array
     */
    protected $rules = [
            //images
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'product_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'product_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            //rest of the fields:
            'name' => 'string|nullable',
            'short_description' => 'string|nullable',
            'description' => 'string|nullable',
            'product_code' => 'string|nullable',
            'subcategorie_id' => 'int|nullable',
            'part_number'=> 'string|nullable',
            'brand' => 'string|nullable',
            'EAN13_individual' =>'string|nullable',
            'net_price' => 'int|nullable',
            'unidades_embalaje_individual' => 'string|nullable',
            'dimensions_boxes' => 'string|nullable',
            'weight' => 'string|nullable',
            'pack_units' => 'string|nullable',
            'EAN13_box_1' => 'string|nullable',
            'unidades_embalaje_2' => 'string|nullable',
            'dimensions_boxes_2' => 'string|nullable',
            'weight_2' => 'string|nullable',
            'EAN13_box_2' => 'string|nullable',
            'unidades_embalaje_3' => 'string|nullable',
            'dimensions_boxes_3' => 'string|nullable',
            'weight_3' => 'string|nullable',
            'EAN13_box_3' => 'string|nullable',
            'active' => 'int|nullable',

    ];

    /**
     * Modal functions
     *
     * @void
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * Update function
     *
     * @void
     */
    public function update()
    {
        //el proceso es el mismo que para actualizar ofertas:

        $data =  $this->validate($this->rules);

        //PROCESAMIENTO IMAGEN 1:
        //repetimos cada proceso por cada imagen
        //al ser tres repetimos algo de código para darle al usuario opciones
        //de poder actualizar cada foto independientemente
        //estas funciones se podrían minimizar en una dependiendo si el input trae o no datos
        //y filtrar el array
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
            //mandamos un mensaje al usuario de que la imagen se esta procesando
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


        if($data['active'] == 0){
            $this->product->active = 0;
            $this->product->save();
        }
        $updateFields = array_filter($data, null);

        foreach( $updateFields as $key => $value){
            $this->product->$key = $value;
            $this->product->save();
        }

        $this->processing = false;

        if($this->product->active == 0){
            return redirect()->route('products.inactive');
        }else{
            return redirect()->route('products.index');
        }
    }

    /**
     * Borrar un Producto de la base de datos
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        Product::find($id)->delete();

        return redirect()->route('products.index');
    }

    /**
     * Recogemos los parámetros necesarios para montar la vista
     *
     * @param [type] $product
     * @return void
     */
    public function mount($product)
    {
        $this->product = $product;
        $this->subcategories = Subcategorie::all();
        $this->portes = Porte::all();
    }

    /**
     * Renderizamos la vista con el producto a editar
     *
     * @return void
     */
    public function render()
    {

        return view('livewire.show-edit-product', [
            'product' => $this->product,
        ]);
    }
}
