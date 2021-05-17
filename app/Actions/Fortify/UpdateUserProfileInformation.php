<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        // dd($input);
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'phone' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'comercial_name' => ['required', 'string', 'max:255'],
            'CIF' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'cp' => ['required'],
            'province' => ['required', 'string', 'max:255'],
            'tipo_usuario' => ['required','string', 'max:255'],

        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }
        // dd($input);
        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'surname' => $input['surname'],
                'company' => $input['company'],
                'comercial_name' => $input['comercial_name'],
                'CIF' => $input['CIF'],
                'adress' => $input['adress'],
                'city' => $input['city'],
                'cp' => $input['cp'],
                'province' => $input['province'],
                'tipo_usuario' => $input['tipo_usuario'],

            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'phone' => $input['phone'],
            'surname' => $input['surname'],
            'company' => $input['company'],
            'comercial_name' => $input['comercial_name'],
            'CIF' => $input['CIF'],
            'adress' => $input['adress'],
            'city' => $input['city'],
            'cp' => $input['cp'],
            'province' => $input['province'],
            'tipo_usuario' => $input['tipo_usuario'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
