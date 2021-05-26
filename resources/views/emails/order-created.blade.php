<!DOCTYPE html>
<html>
<head>
 <title>Laravel 8 Send Email Example</title>
</head>
<body>

 <h1>Hemos recibido tu pedido</h1>
 <p>En breve nos pondremos en contacto contigo para comunicar la mejor opción de envio.</p>
    <p>Pedido # {{$order->id}}</p>

    @foreach ( $orderItems as $item )
        {{$item->id}}
        {{$item->units}}
        {{-- {{$item->product->name}} --}}
        {{$item->unit_price}}
    @endforeach
</body>
</html>
