<?php

use App\Http\Livewire\SingleProductCard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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


// Route::get('/product/{id}', SingleProductCard::class)->name('singleproduct');

Route::get('/vistadeprueba', function() {
    return view('vistadeprueba');
 })->name('prueba');