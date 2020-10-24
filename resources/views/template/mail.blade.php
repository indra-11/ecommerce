<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @php
        $total = 0;
    @endphp
    <div>
        <h1>Anda telah melakukan pemesanan: </h1>
        <table>
            <thead>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Jumlah Produk</th>
                <th>SubTotal</th>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$cart->product->name}}</td>
                        <td>{{number_format($cart->product->price)}}</td>
                        <td>{{$cart->qty}}</td>
                        <td>{{number_format($cart->qty * $cart->product->price)}}</td>
                    </tr>
                    @php
                        $total += ($cart->qty *  $cart->product->price);
                    @endphp
                @endforeach
            </tbody>
        </table>
        <h1>Total Pembayaran: {{number_format($total)}}</h1>
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>