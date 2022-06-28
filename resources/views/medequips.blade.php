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
        <h1>Medical Equip</h1>
        <div class="row">
            <div class="column">
                <p>Sink</p>
                <a href="med_equip/1">
                    <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2020/12/11/31a46979-cd7f-4035-8212-9f4edbdf35b9.jpg" class ="pict">
                </a>
            </div>
            <div class="column">
                <p>Mask</p>
                <a href="med_equip/2">
                    <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/7/15/4891514/4891514_ddcb8153-23cf-4ba2-85a7-c5a49812cf90_700_700" class ="pict">
                </a>
            </div>
        </div>
    </div>
</body>
</html>