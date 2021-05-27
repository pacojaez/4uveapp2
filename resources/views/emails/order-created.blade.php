<!DOCTYPE html>
<html>
<head>
 <title>Laravel 8 Send Email Example</title>
</head>
<body>

 <h1>Hemos recibido tu pedido</h1>
 <p>En breve nos pondremos en contacto contigo para comunicar la mejor opción de envio.</p>
    <p>Pedido # {{ $order->id }}</p>

    <table>
        <thead>
            <tr>
                <td>
                    PRODUCTO
                </td>
                <td>
                    PRECIO VENTA
                </td>
                <td>
                    UNIDADES
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ( $orderItems as $item )

            <tr>
                <td>
                    {{ $item->product->name }}
                </td>
                <td>
                    {{ $item->unit_price}} €
                </td>
                <td>
                    {{$item->units}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
