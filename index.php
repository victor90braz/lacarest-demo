<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Demo</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;

        }

        body{
            font-family: 'Roboto', sans-serif;
        }

        .container{
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>
                <?php
                $logo = "logo ";
                $tittle = "brand";

                echo $logo;
                echo $tittle;
                ?>
            </h1>

            <h2>
                <?php
                $subTittle = "categories";
                echo $subTittle;
                ?>
            </h2>
        </header>
    </div>
</body>
</html>