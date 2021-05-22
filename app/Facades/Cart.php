<?php

namespace App\Facades;

use App\Services\CartService;
use Illuminate\Support\Facades\Facade;

class Cart extends Facade {
    protected static function getFacadeAccessor()
    {
        return CartService::class;
    }
}
// namespace App\Facades;


// use Illuminate\Support\Facades\Facade;

// class Cart extends Facade
// {
//     public static function getFacadeAccessor()
//     {
//         return 'cart';
//     }
// }
