<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Subcategorie;
use App\Models\Portes;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowEditProduct extends Component
{

    use WithFileUploads;

    public $product;
    public $product_image, $product_image_2, $product_image_3, $user_image, $user_image_2, $user_image_3;
    public $isOpen = false;
    public $portes;
    public $subcategories;

    public $photos = [];

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
    public function save()
    {
        $this->validate([
            // 'product_image' => 'image|max:1024', // 1MB Max
            'photos.*' => 'image|max:1024'
            
        ]);

        $this->photo->store('photos');
    }

    public function mount($product){
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
