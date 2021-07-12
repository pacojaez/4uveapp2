<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UsersTable extends Component
{
    use WithPagination;

    /**
     * TODO: The name of the variables will begin with a verb like Is, Can, Will
     *
     * @var boolean
     */
    public $contentIsVisible= false;
    public $noUsers = false;
    protected $users;
    public $perPage= 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = false;

    public $data, $name, $email, $password,$selected_id;
    public $updateMode = false;

    public function updateMode(){
        $this->updateMode = false;
        $this->resetInput();
    }

    public function toggleContent(){
        $this->contentIsVisible = !$this->contentIsVisible;
    }

    public function render()
    {
        $this->users =  User::search($this->search)
                            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                            ->simplePaginate($this->perPage);

        if (!$this->users) {
            $this->noUsers = true;
            return view('livewire.users-table');
        }

        return view('livewire.users-table', [
            'users' => $this->users,
        ]);
    }

    /**
     * Reset the inputs
     *
     * @return void
     */
    // private function resetInput()
    // {
    //     $this->name = null;
    //     $this->email = null;
    //     $this->password = null;
    // }


    // public function store()
    // {
    //     $this->validate([
    //         'name' => 'required|min:5',
    //         'email' => 'required|email:rfc,dns',
    //         'password' => 'required'
    //     ]);
    //     User::create([
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'password' => $this->password
    //     ]);
    //     $this->resetInput();
    // }


    // public function edit($id)
    // {
    //     // $this->contentIsVisible = true;
    //     // dd($id);
    //     // $record = User::findOrFail($id);
    //     // $this->selected_id = $id;
    //     // $this->name = $record->name;
    //     // $this->email = $record->email;
    //     // $this->updateMode = true;

    //     return redirect()->route('products.index');
    // }


    // public function update()
    // {
    //     $this->validate([
    //         'name' => 'required|min:5',
    //         'email' => 'required|email:rfc,dns',
    //         'password' => 'required'
    //     ]);
    //     if ($this->selected_id) {
    //         $record = User::find($this->selected_id);
    //         $record->update([
    //             'name' => $this->name,
    //             'email' => $this->email,
    //             'password' => $this->password
    //         ]);
    //         $this->resetInput();
    //         $this->updateMode = false;
    //     }
    // }

    /**
     * Destroy the User
     *
     * @param [type] $id
     * @return void
     */
    // public function destroy($id)
    // {
    //     dd('Destroy method');
    //     if ($id) {
    //         $record = User::where('id', 'like', $id);
    //         $record->delete();
    //     }
    // }


}
