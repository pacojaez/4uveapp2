<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\PasswordValidationRules;

class UserController extends Controller
{
    use PasswordValidationRules;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    // public function create(){

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        //  dd($request['tipo_usuario']);
        $validated = $this->validate($request, [
            "name" => "required|min:3|string",
            "surname" => "required|min:3|string",
            "company" => "required",
            "comercial_name" => "required|string",
            "CIF" => "required",
            "adress" => "required",
            "city" => "required",
            "cp" => "required|string|max:5",
            "province" => "required",
            "email" => "required|email",
            "password" => $this->passwordRules(),
            "phone" => "required",
            "tipo_usuario"=>"required|nullable"
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        // dd($user);
        // $this->emit('alert_remove');
        return redirect()->route('users.index')->with('message', 'Usuario añadido correctamente');
        // return back()->with('message', 'Usuario añadido correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user )
    {
        // dd($request);
        $validated = $this->validate($request, [
            "name" => "string|nullable",
            "surname" => "string|nullable",
            "company" => "string|nullable",
            "comercial_name" => "string|nullable",
            "CIF" => "string|nullable",
            "adress" => "string|nullable",
            "city" => "string|nullable",
            "cp" => "string|max:5|regex:/(\d{5})/i|nullable",
            "province" => "string|nullable",
            "email" => "email|nullable",
            "password" => "password|nullable",
            "phone" => "string|max:5|regex:/(\d{9})/i|nullable",
            "tipo_usuario" => "nullable"
        ]);
        $updateFields = array_filter($validated, null);
        // dd($updateFields);
        $user = User::find($user);
        foreach( $updateFields as $key => $value){
            $user->$key = $value;
            $user->save();
        }

        return redirect()->route('users.index')->with('user-updated-message', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
