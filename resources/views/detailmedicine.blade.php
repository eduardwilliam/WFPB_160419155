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
            <h2>Paracetamol <br></h2>
            <img src="https://selesfarma.co.id/wp-content/uploads/2020/04/Paracetamol.jpg" class ="pict">
            <p>Harga : Rp. 35.000</p>
        @elseif ($id ==2) 
            <h2>Aspirin<br></h2>
            <img src="https://img.beritasatu.com/cache/beritasatu/910x580-2/1623209335.jpg" class ="pict">
            <p>Harga : Rp. 275.000</p>
        @else
            <h2>Combantrin<br></h2>
            <img src="https://hdmall.id/system/image_attachments/images/000/007/254/medium/combantrin-250mg-str-1.jpg" class ="pict">
            <p>Harga : Rp. 14.500</p>
        @endif
        {{-- Test {{ $id }} --}}
    </div>
</body>
</html>