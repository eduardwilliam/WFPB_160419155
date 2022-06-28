<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        html, body {
            background-color: #fff;
            color: #000000;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            text-align: center;
            }
        .pict{
            border: 1px solid rgb(0, 0, 0);
            border-radius: 5px;
            padding: 5px;
            width: 300px;
        }

        
        * {
        box-sizing: border-box;
        }

        .column {
        float: left;
        width: 33.33%;
        padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
        content: "";
        clear: both;
        display: table;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Medicine</h1>
        <div class="row">
            <div class="column">
                <p>Paracetamol</p>
                <a href="medicine/1">
                    <img src="https://selesfarma.co.id/wp-content/uploads/2020/04/Paracetamol.jpg" class ="pict">
                </a>
            </div>
            <div class="column">
                <p>Aspirin</p>
                <a href="medicine/2">
                    <img src="https://img.beritasatu.com/cache/beritasatu/910x580-2/1623209335.jpg" class ="pict">
                </a>
            </div>
            <div class="column">
                <p>Combantrin</p>
                <a href="medicine/3">
                    <img src="https://hdmall.id/system/image_attachments/images/000/007/254/medium/combantrin-250mg-str-1.jpg" class ="pict">
                </a>
            </div>
        </div>
    </div>
</body>
</html>