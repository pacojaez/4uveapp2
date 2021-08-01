<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OfertaController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Cart;
use App\Http\Livewire\InactiveProducts;
use App\Http\Controllers\SendEMailController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/tipousuario', function () {
    return view('tipousuario');
})->name('tipousuario');

/************************************ RUTAS DE PRODUCTOS  **************************/

Route::resource('products', 'ProductController');


Route::middleware(['isAdmin'])->group(function () {
    //productos no validados
    Route::view('productsinactive', 'products.inactive')->name('products.inactive');

});
//Route::get('inactive', function () {
//    return view('products.inactive');
//})->middleware(['isAdmin'])->name('products.inactive');

Route::get('productos', function() {
    return view('allproducts');
})->name('allproducts');

Route::get('productos/wizard', function() {
    return view('products.wizard');
})->name('products.wizard');

Route::get('product/{id}', function($id) {
    return view('singleproduct', compact('id'));
})->name('singleproduct');



/************************************ RUTAS DE OFERTAS  **************************/

Route::resource('ofertas', 'OfertaController');

//Route::get('ofertasinactive', function () {
//    return view('ofertas.inactive');
//})->name('ofertas.inactive');

// Route::get('/vistadeprueba', function() {
//     return view('vistadeprueba');
//  })->name('prueba');

 Route::get('oferta/{id}', function($id) {
    return view('singleoferta', compact('id'));
})->name('singleoferta');

Route::get('categorie/{id}', function($id) {
    return view('categorieproducts', compact('id'));
})->name('categorieproducts');

/************************************ RUTAS DE CART  **************************/

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('cart2', function(){
    return view('livewire.cart', compact('content',));
})->name('cart2');

//************************RUTAS ADMIN MIDDLEWARE*****************/

Route::middleware(['isAdmin'])->group( function () {
    // User create form
    Route::get('/user/create', [UserController::class, 'createUser'])->name('user.create');
    // Store One user
    Route::post('/user/store',[UserController::class, 'store'])->name('user.store');
    // Show all users
    Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
    // Show one user
    Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    // Store One user
    Route::put('/user/update/{id}',[UserController::class, 'update'])->name('user.update');
    // Delete One user
    Route::get('/user/destroy/{id}',[UserController::class, 'destroy'])->name('user.destroy');

    //OFERTAS NO MOSTRADAS AL USUARIO PERO YA CREADAS
    Route::get('/ofertasinactive', function () {
        return view('ofertas.inactive');
    })->name('ofertas.inactive');
});
// User create form
//Route::get('/user/create', [UserController::class, 'createUser'])->middleware('isAdmin')->name('user.create');
//// Store One user
//Route::post('/user/store',[UserController::class, 'store'])->middleware('isAdmin')->name('user.store');
//// Show all users
//Route::get('/users/index', [UserController::class, 'index'])->middleware('isAdmin')->name('users.index');
//// Show one user
//Route::get('/user/edit/{user}', [UserController::class, 'edit'])->middleware('isAdmin')->name('user.edit');
//// Store One user
//Route::put('/user/update/{id}',[UserController::class, 'update'])->middleware('isAdmin')->name('user.update');
//// Delete One user
//Route::get('/user/destroy/{id}',[UserController::class, 'destroy'])->middleware('isAdmin')->name('user.destroy');

//*******CONTACT ***************************/

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//********LEGAL LINKS */
Route::view('/politicacookies', 'politicacookies')->name('politicacookies');
Route::view('/avisolegal', 'avisolegal')->name('avisolegal');
//Route::get('/politicacookies', function(){
//    return view('politicacookies');
//})->name('politicacookies');

//Route::get('/avisolegal', function(){
//    return view('avisolegal');
//})->name('avisolegal');

//******MAIL ROUTES  */
Route::get('email-test', function(){

    $details['email'] = 'your_email@gmail.com';

    dispatch(new App\Jobs\SendEmailJob($details));

    dd('done');
    });

Route::get('welcome-email', [SendEmailController::class, 'welcomeMail'])->name('welcomeMail');
Route::get('order-created', [SendEmailController::class, 'orderCreated']);
