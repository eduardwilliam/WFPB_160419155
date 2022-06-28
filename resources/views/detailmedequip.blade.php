<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .pict{
            border: 1px solid rgb(0, 0, 0);
            border-radius: 5px;
            padding: 5px;
            width: 300px;
        }
    </style>
</head>
<body>
    <h1>Detail Product</h1>
    <div>
        @if ($id ==1)
            <h2>Sink <br></h2>
            <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2020/12/11/31a46979-cd7f-4035-8212-9f4edbdf35b9.jpg" class ="pict">
            <p>Harga : Rp. 15.000</p>
        @else
            <h2>Mask<br></h2>
            <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/7/15/4891514/4891514_ddcb8153-23cf-4ba2-85a7-c5a49812cf90_700_700" class ="pict">
            <p>Harga : Rp. 30.000</p>
        @endif
        {{-- Test {{ $id }} --}}
    </div>
</body>
</html>