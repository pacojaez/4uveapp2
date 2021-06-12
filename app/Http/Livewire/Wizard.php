<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Oferta;
use App\Models\Subcategorie;
use App\Models\Portes;

class Wizard extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $price, $detail, $status = 1;
    public $successMsg = '';

    public $productslist;
    public $search;

    public $product;

    public $selectedProduct;
    public $subcategories;
    public $portes;

    public $product_image, $product_image_2, $product_image_3, $user_image, $user_image_2, $user_image_3;

    public $name, $description, $short_description, $product_code, $lote_image, $cb_unit, $part_number, $brand,
        $EAN13_individual, $unidades_embalaje_original, $dimensions_boxes, $weight, $pack_units,
        $unidades_embalaje_2, $dimensions_boxes_2, $weight_2, $unidades_embalaje_3, $dimensions_boxes_3, $weight_3,
        $plazo_preparacion_pedido, $contraoferta, $localidad_recogida, $cp_recogida, $provincia_recogida, $offer_units,
        $boxes_quantity, $whole_box_dimensions, $embalaje_original, $provider, $invoice_cost_price,
        $buyed_date, $boxes, $offer, $new, $offer_until, $offer_prize, $subcategorie_id, $net_price,
        $EAN13_box_1, $EAN13_box_2, $categoria_oferta, $EAN13_box_3;


    public function mount(){

        $this->subcategories = Subcategorie::all();
        $this->portes = Portes::all();
    }

    public function clearSearch(){
        $this->selectedProduct = null;
        $this->name = '';
        $this->short_description = '';
        $this->description = '';
        $this->product_code = '';
        $this->subcategorie_id = 1;
        $this->part_number = '';
        $this->EAN13_individual ='';
        $this->net_price = '';
        $this->unidades_embalaje_original = '';
        $this->dimensions_boxes = '';
        $this->weight = '';
        $this->EAN13_box_1 = '';
        $this->unidades_embalaje_2 = '';
        $this->dimensions_boxes_2 = '';
        $this->weight_2 = '';
        $this->EAN13_box_2 = '';
        $this->unidades_embalaje_3 = '';
        $this->dimensions_boxes_3 = '';
        $this->weight_3 = '';
        $this->EAN13_box_3 = '';

    }

    public function storeProduct(){

        $this->product = new Product;
        // dd($this->product);
        $data =  $this->validate([
            // Images:
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'product_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'product_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
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
            'EAN13_box_1' => 'string|nullable',
            'EAN13_box_2' => 'string|nullable',
            'EAN13_box_3' => 'string|nullable',
            'boxes_quantity' => 'string|nullable',

            'subcategorie_id' => 'int|nullable',
            'net_price' => 'int|nullable',
        ]);

        dd($data);

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

        //END IMAGE PROCESSING

        $this->product->user_id = Auth::user()->id;

        if( $data['porte_id'] == null){
            $data['porte_id'] = 1;
        }

        $this->product->subcategorie_id = $this->subcategorie_id;

        //***ojo solo para pruebas*/
        $this->product->active = 1;
        //***ojo solo para pruebas*/

        $createFields = array_filter($data, null);

        // $product = Product::find($this->product);
        foreach( $createFields as $key => $value){
            $this->product->$key = $value;
            $this->product->save();
        }

        $this->processing = false;

        return redirect()->route('products.index', [
            'subcategorie' => Subcategorie::all(),
            'portes' => Portes::all(),
        ]);

    }

    public function render()
    {
        $this->productslist = Product::search($this->search)->get();


        if($this->selectedProduct != null){

            $selected = Product::findOrFail($this->selectedProduct);

            $this->name = $selected->name;
            $this->short_description = $selected->short_description;
            $this->description = $selected->description;
            $this->product_code = $selected->product_code;
            $this->subcategorie_id = $selected->subcategorie_id;
            $this->part_number = $selected->part_number;
            $this->EAN13_individual = $selected->EAN13_individual;
            $this->net_price = $selected->net_price;
            $this->unidades_embalaje_original = $selected->unidades_embalaje_original;
            $this->dimensions_boxes = $selected->dimensions_boxes;
            $this->weight = $selected->weight;
            $this->EAN13_box_1 = $selected->EAN13_box_1;
            $this->unidades_embalaje_2 = $selected->unidades_embalaje_2;
            $this->dimensions_boxes_2 = $selected->dimensions_boxes_2;
            $this->weight_2 = $selected->weight_2;
            $this->EAN13_box_2 = $selected->EAN13_box_2;
            $this->unidades_embalaje_3 = $selected->unidades_embalaje_3;
            $this->dimensions_boxes_3 = $selected->dimensions_boxes_3;
            $this->weight_3 = $selected->weight_3;

            $this->product_image = $selected->product_image;
            $this->product_image_2 = $selected->product_image_2;
            $this->product_image_3 = $selected->product_image_3;

        }else{
            $selected = '';
        }



        if($this->productslist == ''){
            $this->clearSearch();
        }
        // $selected = Product::findOrFail($this->selectedProduct);
        // dd($selected);
        return view('livewire.wizard', [
            'productslist' => $this->productslist,
            'selected' => $selected,
            'subcategories' => $this->subcategories,
            'portes' => $this->portes,
        ]);
    }

    /**
     * Write code on Method
     */
    public function firstStepSubmit()
    {
        // dd($this->selectedProduct);
        $validatedData = $this->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'detail' => 'required',
        ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'status' => 'required',
        ]);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {
        // Team::create([
        //     'name' => $this->name,
        //     'price' => $this->price,
        //     'detail' => $this->detail,
        //     'status' => $this->status,
        // ]);

        $this->successMsg = 'Team successfully created.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {
        $this->name = '';
        $this->price = '';
        $this->detail = '';
        $this->status = 1;
    }

}
