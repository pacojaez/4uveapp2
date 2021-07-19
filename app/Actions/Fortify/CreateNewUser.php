<?php

namespace App\Actions\Fortify;

use App\Http\Controllers\SendEMailController;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $data = Validator::make($input, [
            'name' => ['required', 'string', 'regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüçÇ\s]+$/'],
            'surname' => ['required', 'string', 'regex:/^[a-zA-Z áéíóúÁÉÍÓÚñÑüçÇ\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'company' => ['required', 'string', 'max:255'],
            'comercial_name' => ['required', 'string', 'max:255'],
            'CIF' => ['required', 'string', 'max:255', 'min: 4'],
            'adress' => ['required', 'string', 'max:255', 'min: 4'],
            'city' => ['required', 'string', 'max:255', 'min: 4'],
            'cp' => ['required', 'string', 'max:5', 'regex:/[0-9]+$/'],
            'province' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min: 9', 'regex:/[0-9]+$/'],
            'tipo_usuario' => ['required', 'string'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        /**
         * send a welcome mail
         */
        SendEMailController::welcomeMail($data);

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'surname' => $input['surname'],
                'company' => $input['company'],
                'comercial_name' => $input['comercial_name'],
                'CIF' => $input['CIF'],
                'adress' => $input['adress'],
                'city' => $input['city'],
                'cp' => $input['cp'],
                'province' => $input['province'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'phone' => $input['phone'],
                'tipo_usuario'=> $input['tipo_usuario'],
                'role' => 'User',

            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
