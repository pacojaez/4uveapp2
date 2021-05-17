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
    //     dd($request['tipo_usuario']);
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

        User::create($validated);

        // $this->emit('alert_remove');

        return back()->with('message', 'Usuario añadido correctamente');
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
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $this->validate($request, [
            "name" => "required|min:3|string",
            "surname" => "required|min:3|string",
            "company" => "required",
            "comercial_name" => "required|string",
            "CIF" => "required",
            "adress" => "required",
            "city" => "required",
            "cp" => "required|int|max:5",
            "province" => "required",
            "email" => "required|email",
            "password" => "required|password",
            "phone" => "required",
            "role" => "nullable"
        ]);

        $user->update($validated);

        return back()->with('message', 'item updated successfully');
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
