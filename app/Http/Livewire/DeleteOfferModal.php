<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\Oferta;
use App\Models\Order;


class DeleteOfferModal extends ModalComponent
{

    public $oferta_id;

    protected $listeners = ['destroyOffer' => 'destroy'];

    public static function modalMaxWidth(): string
    {
        return '5xl';
    }

    public function mount( $oferta_id )
    {

        $this->oferta_id = $oferta_id;
        // dd($this->oferta);
    }

    public function render()
    {

        return view('livewire.delete-offer-modal', [
            'oferta_id' => $this->oferta_id,
        ]);
    }

    public function destroy(){

        $oferta = Oferta::findOrFail($this->oferta_id);
        $done = $oferta->delete();

            session()->flash('offer_deleted', 'Oferta eliminada definitivamente.');
            redirect()->to('/ofertas');

    }
}
