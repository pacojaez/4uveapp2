<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/************************************ RUTAS DE PRODUCTOS  **************************/
Route::get('products', function() {
    return view('allproducts');
})->name('allproducts');

Route::get('product/{id}', function($id) {
    return view('singleproduct', compact('id'));
})->name('singleproduct');

Route::get('categorie/{id}', function($id) {
    return view('categorieproducts', compact('id'));
})->name('categorieproducts');

Route::get('cart', function(){
    return view('livewire.cart');
})->name('cart');

// Route::livewire('cart', 'cart')->name('cart');

// Route::get('cart', 'cart')->name('cart');

// Route::get('/product/{id}', SingleProductCard::class)->name('singleproduct');

Route::get('/vistadeprueba', function() {
    return view('vistadeprueba');
 })->name('prueba');


 // route de prueba para laravel 8 //

//  Route::get('/', 'CartController@hello');    ------ASI NO

//----------ASI SI
//  Route::get('cart1', [CartController::class, 'hello'])->name('cart1');
// Route::get('cart', [app\Http\Livewire\Cart::class])->name('cart');

// Route::get('cart', function () {
//     return 'Hello World';
// });

Route::get('greeting', function () {
    return 'Hello World';
});

// Route::view('cart', 'cart');

// Route::livewire('/', 'home')->name('home');
// Route::livewire('/products', 'products')->name('products');
