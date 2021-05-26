<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Mail\RegisterSuccessMail;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class SendEMailController extends Controller
{


    // public function registersuccess(){

    //     Mail::to('receiver-email-id')->send(new RegisterSuccessMail());

    //     if (Mail::failures()) {
    //          return response()->Fail('Sorry! Please try again latter');
    //     }else{
    //          return response()->success('Great! Successfully send in your mail');
    //        }
    // }

    public static function welcomeMail( $data ) {


        $email = $data['email'];

        $mailInfo = [
            'title' => 'Gracias por confiar en 4uve '.$data['name'],
            'mail' => 'Te has registrado con el siguiente mail: '.$data['email'],
            // 'tipo_usuario' => 'Tenemos las mejores ofertas para '.$data[''],
            'url' => 'https://www.4uve.org'
        ];

        // dd($mailInfo);

        Mail::to($email)->send(new WelcomeMail($mailInfo));

        return response()->json([
            'message' => 'Mail has sent.'
        ], Response::HTTP_OK);
    }

    public static function orderCreated($data, $customer, $Order) {


        $email = $customer;

        $mailInfo = [
            'title' => 'Hemos recibido tu pedido',
            'url' => 'https://www.4uve.org'
        ];

        // dd($mailInfo);

        Mail::to($email)->send(new OrderCreated($Order));

        return response()->json([
            'message' => 'Mail has sent.'
        ], Response::HTTP_OK);
    }
}
