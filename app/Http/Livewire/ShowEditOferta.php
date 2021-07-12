<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Oferta;
use App\Models\Subcategorie;
use App\Models\Porte;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowEditOferta extends Component
{
    use WithFileUploads;

    public $oferta;

    public $user_image, $user_image_2, $user_image_3;

    public $name, $description, $short_description, $product_code;

    public $plazo_preparacion_pedido, $localidad_recogida, $provincia_recogida, $cp_recogida, $embalaje_original,
            $provider, $invoice_cost_price, $buyed_date, $boxes, $subcategorie_id,
            $offer_units, $offer_prize, $categoria_oferta, $active, $user_id, $product_id, $porte_id, $new, $contraoferta;

    public $gender;

    public $isOpen = false;

    public $processing = false;

    public $portes;
    public $porte;
    public $subcategories;

    public $ahorro;

    /***
     * Rules for the Offer Form
     */
    protected $rulesOffer = [
        // Lote: Imagenes
        'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'user_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'user_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        // Oferta:
        'localidad_recogida' => 'string|nullable',
        'provincia_recogida' => 'string|nullable',
        'cp_recogida' => 'string|nullable',

        'boxes' => 'int|nullable|regex:/^\d*\.?\d+$/',
        'offer_units' => 'int|nullable|regex:/^\d*\.?\d+$/',
        'provider' => 'string|nullable',

        'buyed_date' => 'date|nullable',
        'plazo_preparacion_pedido' => 'date|nullable',
        'contraoferta' => 'int|nullable',

        'porte_id' => 'nullable|int',
        'invoice_cost_price' => 'string|nullable|regex:/^\d*\.?\d+$/',
        'offer_prize' => 'int|nullable|regex:/^\d*\.?\d+$/',

        'categoria_oferta' => 'required|string',
        'embalaje_original' => 'nullable|int',
        'new' => 'nullable|int',

        'active' => 'string|nullable',

    ];

    public function mount(Oferta $oferta)
    {
        $this->oferta = $oferta;
        $this->subcategories = Subcategorie::all();
        $this->portes = Porte::all();
        $this->categoria_oferta = $oferta->categoria_oferta;
        $this->contraoferta = $oferta->contraoferta;
        $this->porte_id = $oferta->porte_id;
        $this->new = $oferta->new;
        $this->embalaje_original = $oferta->embalaje_original;
        // $this->temp_url_1;

    }

    /***
     * Clear all the inputs from the offer Form
     */
    public function clearOfferForm()
    {

        $this->localidad_recogida = '';
        $this->provincia_recogida = '';
        $this->cp_recogida = '';
        $this->categoria_oferta = '';
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
    /***
     * Clear the images from the Form
     */
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

    /***
     * Update the Offer Form
     * Empty fields are not updated
     */
    public function update()
    {

        $data = $this->validate($this->rulesOffer);

        //PROCESAMIENTO IMAGEN 1:
        //repetimos cada proceso por cada imagen
        //al ser tres repetimos algo de código para darle al usuario opciones
        //de poder actualizar cada foto independientemente
        //estas funciones se podrían minimizar en una dependiendo si el input trae o no datos
        //y filtrar el array
        if($data['user_image']){
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            //instanciamos la propiedad de la user_image_1
            $image = $this->user_image;
            //generamos un nombre random para la imagen
            $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
            //procesamos la imagen para redimensionarla
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            //guardamos la imagen en la carpeta especificada
            Storage::disk('local')->put('public/images/products'.'/'.$name, $img, 'public');
            //la ruta de la imagen la almacenamos en la DB
            $data['user_image'] = $name;
            //añadimos el campo al array que guardaremos en la DB
            $this->oferta->user_image = $data['user_image'];
        }

        //PROCESAMIENTO IMAGEN 2:

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
            $this->oferta->user_image_2 = $data['user_image_2'];
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
            $this->oferta->user_image_3 = $data['user_image_3'];
        }

        //si el campo de la oferta no está activo lo guardamos en la DB
        if($data['active'] == 0){
            $this->oferta->active = 0;
            $this->oferta->save();
        }
        //si no tiene el embalaje_original
        if($data['embalaje_original'] == "0"){
            $this->oferta->embalaje_original = 0;
            $this->oferta->save();
        }else{
            //en caso contrario
            $this->oferta->embalaje_original = 1;
            $this->oferta->save();
        }
        //si la oferta no es de un producto nuevo
        if($data['new'] == "0"){
            $this->oferta->new = 0;
            $this->oferta->save();
        }else{
            //en caso contrario
            $this->oferta->new = 1;
            $this->oferta->save();
        }
        //si la oferta no admite contraoferta
        if($data['contraoferta'] == "0"){
            $this->oferta->contraoferta = 0;
            $this->oferta->save();
        }else{
            //en caso contrario
            $this->oferta->contraoferta = 1;
            $this->oferta->save();
        }

        // filtramos el array de data para añadir solo los campos que traigan datos
        $updateFields = array_filter($data, null);

        //por cada campo que trae datos hacemos un update en la DB
        //dandole así flexibilidad al usuario de que actualice los campos que desee
        foreach( $updateFields as $key => $value){
            $this->oferta->$key = $value;
            $this->oferta->save();
        }

        //eliminamos ela advertencia de que se está procesando la petición
        $this->processing = false;

        //redirigimos al usuario
        //bien a la página de ofertas inactivas si la oferta es inactiva
        if($this->oferta->active == 0){
            return redirect()->route('ofertas.inactive');
        }else{
            //bien a la página de ofertas activas
            return redirect()->route('ofertas.index');
        }

    }
    /***
     * Delete the Offer
     */
    public function delete($id)
    {
        Oferta::find($id)->delete();

        return redirect()->route('ofertas.index');
    }
    /**
     * Funciones para resetear los inputs de imagenes del formulario
     *
     * @return void
     */
    public function clearPhoto1()
    {
        $this->user_image = '';
    }

    public function clearPhoto2()
    {
        $this->user_image_2 = '';
    }
    public function clearPhoto3()
    {
        $this->user_image_3 = '';
    }


    public function render()
    {
        //evitar divisiones por 0 en el cálculo del % de oferta
        if ($this->invoice_cost_price != 0) {
            $this->ahorro = 100 - ($this->offer_prize * 100) / $this->invoice_cost_price;
        }

        return view('livewire.show-edit-oferta', [
            'oferta' => $this->oferta,
            'user_image' => $this->user_image,
            'user_image_2' => $this->user_image_2,
            'user_image_3' => $this->user_image_3,
            'ahorro' => $this->ahorro,
        ]);
    }
}
