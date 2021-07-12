<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;


class DeleteUserModal extends ModalComponent
{

    public $user_id;

    protected $listeners = ['destroyUser' => 'destroy'];

    public static function modalMaxWidth(): string
    {
        return '5xl';
    }

    public function mount( $user_id )
    {

        $this->user_id = $user_id;
    }

    public function render()
    {

        return view('livewire.delete-user-modal', [
            'user_id' => $this->user_id,
        ]);
    }

    public function destroy(){

        $user = User::findOrFail($this->user_id);
        $done = $user->delete();

        session()->flash('user-deleted-message', 'Usuario eliminado definitivamente.');
        redirect()->route('users.index');

    }
}
