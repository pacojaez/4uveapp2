<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Cart;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/************************************ RUTAS DE PRODUCTOS  **************************/
Route::get('productos', function() {
    return view('allproducts');
})->name('allproducts');

Route::get('product/{id}', function($id) {
    return view('singleproduct', compact('id'));
})->name('singleproduct');

Route::get('categorie/{id}', function($id) {
    return view('categorieproducts', compact('id'));
})->name('categorieproducts');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('cart2', function(){
    return view('livewire.cart', compact('content',));
})->name('cart2');

// Route::get('/cart', function () {
//     return view('livewire.cart');
// })->name('cart');

// Route::get('/cart', Cart::class );
// After
// Route::get('/cart', Cart::class);
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


//************************RUTAS USUARIOS*****************/
// User create form
Route::get('/user/create', [UserController::class, 'createUser'])->middleware('isAdmin')->name('user.create');
// Store One user
Route::post('/user/store',[UserController::class, 'store'])->middleware('isAdmin')->name('user.store');
// Show all users
Route::get('/users/index', [UserController::class, 'index'])->middleware('isAdmin')->name('users.index');
// Show one user
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->middleware('isAdmin')->name('user.edit');
// Store One user
Route::put('/user/update/{id}',[UserController::class, 'update'])->middleware('isAdmin')->name('user.update');

//************************RUTAS PRODUCTOS*****************/
// Show all products
// Route::get('/products/index', [ProductController::class, 'index'])->middleware('isAdmin')->name('products.index');
// Show edit page one product
// Route::get('/products/show/{product_id }', [ProductController::class, 'show'])->name('products.show');

Route::resource('products', 'ProductController');
