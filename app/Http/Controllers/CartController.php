<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Cart;
// use App\Facades\Cart as CartFacade;

class CartController extends Controller
{

    // protected $total =0;
    // protected $content =[];

    // protected $listeners = [
    //     'productAddedToCart' => 'updateCart',
    // ];
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
    public function index()
    {
        // dd(count($this->content));
        return view('cart');
    }

//     // public function removeFromCart(string $product_id): void
//     // {
//     //     dd($product_id);
//     //     CartFacade::remove($product_id);
//     //     $this->cart = CartFacade::get();
//     //     $this->emit('productRemoved');
//     // }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         Cart::add(array(
//             'id' => $request->id?$request->id:'1', // inique row ID
//             'name' => $request->name?$request->name:'example',
//             'price' =>$request->price?$request->price:20.20,
//             'quantity' => $request->quantity?$request->quantity:1,
//             'attributes' => array(
//                 'color' => $request->color?$request->color:'green',
//                 'size' => $request->size?$request->size:'Big',
//             )
//         ));
//         return back();
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
}
