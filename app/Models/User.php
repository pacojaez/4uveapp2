<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Uuids;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Uuids;
     /**
     *
     * Using uuid
     */
    public $incrementing = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'company', 'comercial_name', 'CIF', 'adress', 'city', 'cp', 'province', 'email', 'password', 'phone', 'role', 'tipo_usuario',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
        'isAdmin'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * return if User is admin
     */

     public function isAdmin(){

        if (auth()->check() && auth()->user()->is_admin)
        return true;

     }

    /**
     * Get the products of the user.
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the products of the user.
     */
    public function oferta()
    {
        return $this->hasMany(Oferta::class);
    }

    /**
     * Get the cartItems of the user.
     */
    public function cartItem()
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     * Get the cartItems of the user.
     */
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }


    /****
     * Searching dinamicaly
     **/
    public static function search( $search ){
        // dd($search);

        // return User::query()->where('name', 'like', '%nic%');

        return empty($search) ? static::query()
                                : static::query()->where('id', 'like', '%'.$search.'%')
                                        ->orWhere('name', 'like', '%'.$search.'%')
                                        ->orWhere('email', 'like', '%'.$search.'%')
                                        ->orWhere('company', 'like', '%'.$search.'%')
                                        ->orWhere('comercial_name', 'like', '%'.$search.'%')
                                        ->orWhere('tipo_usuario', 'like', '%'.$search.'%');


    }


}
