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
use App\Models\Porte;

class Wizard extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $price, $detail, $status = 1;
    public $successMsg = '';

    public $storedProduct = false;
    public $storedOferta = false;

    public $productslist;
    public $search;

    // public $product;
    public $oferta;

    public $selectedProduct;
    public $selected;

    public $product_id;
    public $subcategories;
    public $portes;

    public $product_image, $product_image_2, $product_image_3, $user_image, $user_image_2, $user_image_3;

    public $temp_url_1 = false;
    public $temp_url_2 = false;
    public $temp_url_3 = false;

    public $name, $description, $short_description, $product_code, $lote_image, $cb_unit, $part_number, $brand,
        $EAN13_individual, $unidades_embalaje_individual, $dimensions, $weight, $subcategorie_id,
        $unidades_embalaje_2, $dimensions_boxes_2, $weight_2, $unidades_embalaje_3, $dimensions_boxes_3, $weight_3, $EAN13_box_1, $EAN13_box_2, $EAN13_box_3;

    public $plazo_preparacion_pedido, $contraoferta, $localidad_recogida, $cp_recogida, $provincia_recogida, $offer_units,
        $boxes_quantity, $boxes_dimensions, $embalaje_original, $provider, $invoice_cost_price,
        $buyed_date, $boxes, $offer, $new, $offer_until, $offer_prize, $net_price,
        $categoria_oferta, $porte_id;

    public $ahorro;

    //esta propiedad equivale al embalaje_original mientras averiguo porque se rompe la vista con embalaje_original
    public $gender;
    public $contra_oferta;

    protected $rules = [
        // Producto: Imagenes
        'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'product_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'product_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'user_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'user_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        //Product: rest of the fields:
        'name' => 'string|required|min:5',
        'short_description' => 'string|nullable|min:5',
        'description' => 'string|nullable',
        'product_code' => 'string|nullable',
        'part_number' => 'string|nullable',
        'brand' => 'string|nullable',
        'EAN13_individual' => 'string|nullable',
        'dimensions' => 'string|nullable',
        'weight' => 'string|nullable|regex:/^\d*\.?\d+$/',
        'unidades_embalaje_individual' => 'string|nullable|regex:/^\d*\.?\d+$/',
        'EAN13_box_2' => 'string|nullable',
        'dimensions_boxes_2' => 'string|nullable',
        'weight_2' => 'string|nullable',
        'unidades_embalaje_2' => 'string|nullable|regex:/^\d*\.?\d+$/',
        'EAN13_box_3' => 'string|nullable',
        'dimensions_boxes_3' => 'string|nullable',
        'weight_3' => 'string|nullable',
        'unidades_embalaje_3' => 'string|nullable|regex:/^\d*\.?\d+$/',
        'subcategorie_id' => 'int|required',
        'net_price' => 'string|nullable|regex:/^\d*\.?\d+$/',
        // 'unidades_embalaje_original' => 'string|nullable|regex:/^\d*\.?\d+$/',
    ];

    protected $rulesOffer = [
        // Lote: Imagenes
        'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'user_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'user_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        // Oferta:
        'plazo_preparacion_pedido' => 'string|nullable',
        'offer_units' => 'int|nullable|regex:/^\d*\.?\d+$/',
        'boxes' => 'int|nullable|regex:/^\d*\.?\d+$/',
        'provider' => 'string|nullable',
        'buyed_date' => 'date|nullable',
        'localidad_recogida' => 'string|nullable',
        'cp_recogida' => 'string|nullable',
        'provincia_recogida' => 'string|nullable',
        'porte_id' => 'required|string|regex:/^\d*\.?\d+$/',
        'new' => 'nullable|int',
        'contraoferta' => 'nullable|int',
        'embalaje_original' => 'nullable|int',
        'categoria_oferta' => 'required|string',
        'invoice_cost_price' => 'nullable|regex:/^\d*\.?\d+$/',
        'offer_prize' => 'nullable|regex:/^\d*\.?\d+$/',

    ];



    public function mount()
    {

        $this->subcategories = Subcategorie::all();
        $this->portes = Porte::all();
        // $this->temp_url_1;

    }

    public function clearSearch()
    {
        $this->selectedProduct = null;
        $this->selected = '';
        $this->name = '';
        $this->short_description = '';
        $this->description = '';
        $this->product_code = '';
        $this->subcategorie_id = 1;
        $this->part_number = '';
        $this->EAN13_individual = '';
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
        $this->product_image = '';
        $this->product_image_2 = '';
        $this->product_image_3 = '';
        // $this->porte_id = 1;

        $this->storedProduct = false;
        $this->storedOferta = false;

        $this->resetErrorBag();
    }

    public function clearSearchOffer()
    {
        $this->gender = null;
        $this->resetErrorBag();
    }

    public function clearOfferForm()
    {

        $this->localidad_recogida = '';
        $this->provincia_recogida = '';
        $this->cp_recogida = '';
        $this->categoria_oferta = 1;
        $this->units_offer = '';
        $this->boxes = '';
        $this->boxes_dimensions = '';
        $this->gender = '';
        $this->provider = '';
        $this->porte_id = 1;
        $this->invoice_cost_price = 0;
        $this->buyed_date = '';
        $this->user_image = '';
        $this->user_image_2 = '';
        $this->user_image_3 = '';
        $this->ahorro = 0;
        $this->offer_prize = 0;

        $this->storedOferta = false;
        $this->resetErrorBag();
    }

    public function clearPhoto1()
    {
        $this->product_image = '';
    }

    public function clearPhoto2()
    {
        $this->product_image_2 = '';
    }
    public function clearPhoto3()
    {
        $this->product_image_3 = '';
    }

    public function clearPhotoUser1()
    {
        $this->user_image = '';
    }

    public function clearPhotoUser2()
    {
        $this->user_image_2 = '';
    }

    public function clearPhotoUser3()
    {
        $this->user_image_3 = '';
    }

    public function storeOffer()
    {

        $this->oferta = new Oferta;
        $data = $this->validate($this->rulesOffer);

        //PROCESAMIENTO IMAGEN  USUARIO:
        if ($data['user_image']) {
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->user_image;
            $name = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products' . '/' . $name, $img, 'public');
            $data['user_image'] = $name;

            $this->oferta->user_image = $name;
            // $this->user_temp_url_1 = $image->temporaryUrl();
        }

        //PROCESAMIENTO IMAGEN USUARIO 2:
        if ($data['user_image_2']) {
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->user_image_2;
            $name = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products' . '/' . $name, $img, 'public');
            $data['user_image_2'] = $name;

            $this->oferta->user_image_2 = $name;
            // $this->user_temp_url_1 = $image->temporaryUrl();
        }

        //PROCESAMIENTO IMAGEN  USUARIO 3:
        if ($data['user_image_3']) {
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->user_image_3;
            $name = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products' . '/' . $name, $img, 'public');
            $data['user_image_3'] = $name;

            $this->oferta->user_image_3 = $name;
            // $this->user_temp_url_1 = $image->temporaryUrl();
        }

        $this->oferta->user_id = Auth::user()->id;

        $id = '';

        if ($this->selectedProduct) {
            $id = $this->selectedProduct->id;
        } else {
            $id = $this->product_id;
        }

        $this->oferta->product_id = $id;

        //***ojo solo para pruebas*/
        // $this->oferta->active = 1;
        //***ojo solo para pruebas*/

        $createFields = array_filter($data, null);

        foreach ($createFields as $key => $value) {
            $this->oferta->$key = $value;

        }
        $done = $this->oferta->saveOrFail();

        if($done){
            $this->processing = false;
            $this->clearOfferForm();

            $this->storedOferta = true;
        }

    }

    // public function storeProduct(){

    //     $this->product = new Product;
    //     $guardarProducto = new Product;

    //     $data =  $this->validate($this->rules);
    //
    //     if($data['product_image']){
    //         //mandamos un messaje al usuario de que la imagen se esta procesando
    //         $this->processing = true;
    //         $image = $this->product_image;
    //         $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
    //         $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
    //             $c->aspectRatio();
    //             $c->upsize();
    //         });
    //         $img->stream();
    //         Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
    //         $data['product_image'] = $name;
    //         $this->product->product_image = $data['product_image'];

    //         $this->temp_url_1 = $image->temporaryUrl();
    //         // dd($this->temp_url_1);
    //     }


    //     if($data['product_image_2']){
    //         //mandamos un messaje al usuario de que la imagen se esta procesando
    //         $this->processing = true;
    //         $image = $this->product_image_2;
    //         $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
    //         $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
    //             $c->aspectRatio();
    //             $c->upsize();
    //         });
    //         $img->stream();
    //         Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
    //         $data['product_image_2'] = $name;
    //         $this->product->product_image_2 = $data['product_image_2'];

    //         $this->temp_url_2 = $image->temporaryUrl();
    //     }

    //     if($data['product_image_3']){
    //         //mandamos un messaje al usuario de que la imagen se esta procesando
    //         $this->processing = true;
    //         $image = $this->product_image_3;
    //         $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
    //         $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
    //             $c->aspectRatio();
    //             $c->upsize();
    //         });
    //         $img->stream();
    //         Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
    //         $data['product_image_3'] = $name;
    //         $this->product->product_image_3 = $data['product_image_3'];

    //         $this->temp_url_3 = $image->temporaryUrl();
    //     }

    //     //END IMAGE PROCESSING

    //     $this->product->user_id = Auth::user()->id;
    //     $guardarProducto->user_id = Auth::user()->id;
    //     // if( $data['porte_id'] == null){
    //     //     $data['porte_id'] = 1;
    //     // }

    //     $this->product->subcategorie_id = $this->subcategorie_id;
    //     $guardarProducto->subcategorie_id = $this->subcategorie_id;
    //     // dd($this->product->subcategorie_id);

    //     //***ojo solo para pruebas*/
    //     $this->product->active = 1;
    //     $guardarProducto->active = 0;
    //     //***ojo solo para pruebas*/

    //     $createFields = array_filter($data, null);
    //         // dd($createFields);
    //     foreach( $createFields as $key => $value){
    //         $this->product->$key = $value;
    //         $guardarProducto->$key = $value;

    //         // $this->product->save();
    //         // $this->product->fresh();
    //     }
    //     $this->processing = false;

    //     $this->storedProduct = true;

    //     $this->product_id = $this->product->id;

    //     // dd($guardarProducto->id);
    //     $guardarProducto->save();
    //     // $this->product->save();
    //     // $guardarProducto->save();
    //     // dd($guardarProducto);

    // }

    public function storeProduct()
    {
        $this->product = new Product;

        $data =  $this->validate($this->rules);

        //INIT IMAGE PROCESSING
        if ($data['product_image']) {
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->product_image;
            $name = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products' . '/' . $name, $img, 'public');
            $data['product_image'] = $name;
            $this->product->product_image = $data['product_image'];

            $this->temp_url_1 = $image->temporaryUrl();
            // dd($this->temp_url_1);
        }


        if ($data['product_image_2']) {
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->product_image_2;
            $name = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products' . '/' . $name, $img, 'public');
            $data['product_image_2'] = $name;
            $this->product->product_image_2 = $data['product_image_2'];

            $this->temp_url_2 = $image->temporaryUrl();
        }

        if ($data['product_image_3']) {
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->product_image_3;
            $name = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/products' . '/' . $name, $img, 'public');
            $data['product_image_3'] = $name;
            $this->product->product_image_3 = $data['product_image_3'];

            $this->temp_url_3 = $image->temporaryUrl();
        }
        //END IMAGE PROCESSING

        $this->product->user_id = Auth::user()->id;

        $this->product->subcategorie_id = $this->subcategorie_id;

        //***ojo solo para pruebas*/
        $this->product->active = 1;
        //***ojo solo para pruebas*/

        $createFields = array_filter($data, null);

        foreach ($createFields as $key => $value) {
            $this->product->$key = $value;
            $this->product->saveOrFail();
        }

        $done = $this->product->saveOrFail();
        // dd($done);

        if($done){
            $this->clearSearch();

            $this->product_id = $this->product->id;
            $this->product = '';
            $this->processing = false;
            $this->storedProduct = true;

        }
        // dd($this->product_id);
        return;
    }


    public function render()
    {
        $this->productslist = Product::search($this->search)->get();

        if ($this->selected != null) {

            $this->selectedProduct = Product::findOrFail($this->selected);

            $this->name = $this->selectedProduct->name;
            $this->short_description = $this->selectedProduct->short_description;
            $this->description = $this->selectedProduct->description;
            $this->product_code = $this->selectedProduct->product_code;
            $this->subcategorie_id = $this->selectedProduct->subcategorie_id;
            $this->part_number = $this->selectedProduct->part_number;
            $this->EAN13_individual = $this->selectedProduct->EAN13_individual;
            $this->net_price = $this->selectedProduct->net_price;
            $this->unidades_embalaje_individual = $this->selectedProduct->unidades_embalaje_individual;
            $this->dimensions_boxes = $this->selectedProduct->dimensions_boxes;
            $this->weight = $this->selectedProduct->weight;
            $this->EAN13_box_1 = $this->selectedProduct->EAN13_box_1;
            $this->unidades_embalaje_2 = $this->selectedProduct->unidades_embalaje_2;
            $this->dimensions_boxes_2 = $this->selectedProduct->dimensions_boxes_2;
            $this->weight_2 = $this->selectedProduct->weight_2;
            $this->EAN13_box_2 = $this->selectedProduct->EAN13_box_2;
            $this->unidades_embalaje_3 = $this->selectedProduct->unidades_embalaje_3;
            $this->dimensions_boxes_3 = $this->selectedProduct->dimensions_boxes_3;
            $this->weight_3 = $this->selectedProduct->weight_3;

            $this->product_image = $this->selectedProduct->product_image;
            $this->product_image_2 = $this->selectedProduct->product_image_2;
            $this->product_image_3 = $this->selectedProduct->product_image_3;

            $this->product_id = $this->selectedProduct->id;
        } else {
            $this->selectedProduct = null;
        }

        if ($this->productslist == '') {
            $this->clearSearch();
        }
        $in = floatval($this->invoice_cost_price);
        $of = floatval($this->offer_prize);
        if ($in != 0 && $of != 0 ) {
            // dd(gettype($this->invoice_cost_price));
            $this->ahorro = number_format( 100 - ( $of * 100) / $in, 2);
        }

        // $selected = Product::findOrFail($this->selectedProduct);
        // dd($selected);
        return view('livewire.wizard', [
            'productslist' => $this->productslist,
            'selectedProduct' => $this->selectedProduct,
            'subcategories' => $this->subcategories,
            'portes' => $this->portes,
            'temp_url_1' => $this->temp_url_1,
            'tempUrl2' => $this->temp_url_2,
            'tempUrl3' => $this->temp_url_3,
            'ahorro' => $this->ahorro,
        ]);
    }

    /**
     * Write code on Method
     */
    public function firstStepSubmit(){
        // // dd($this->selectedProduct);
        // $validatedData = $this->validate([
        //     'name' => 'required',
        //     'price' => 'required|numeric',
        //     'detail' => 'required',
        // ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit(){
        // $validatedData = $this->validate([
        //     'status' => 'required',
        // ]);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     */
    // public function submitForm()
    // {
    //     // Team::create([
    //     //     'name' => $this->name,
    //     //     'price' => $this->price,
    //     //     'detail' => $this->detail,
    //     //     'status' => $this->status,
    //     // ]);

    //     $this->successMsg = 'Team successfully created.';
    //     dd($this->successMsg);
    //     $this->clearSearch();
    //     $this->clearOfferForm();

    //     $this->currentStep = 1;
    // }

    /**
     * Write code on Method
     */
    public function back($step){
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm(){
        // $this->name = '';
        // $this->price = '';
        // $this->detail = '';
        // $this->status = 1;
    }
}
