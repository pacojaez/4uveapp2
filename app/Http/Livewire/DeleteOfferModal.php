<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\Oferta;
use App\Models\Order;


class DeleteOfferModal extends ModalComponent
{

    public $oferta_id;

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
}
