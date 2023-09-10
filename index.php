<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="public/images/logo.png" type="image/x-icon">
    <title>Privalia Shop</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
        }

        body{
            font-family: 'Roboto', sans-serif;
        }

        .container{
            height: 100vh;
            background: #D47597;
            padding: 20px;
        }

        header {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }

        img {
            width: 20px;
            height: 20px;
        }

        .container-menu {
            padding: 0;
        }

        .container-menu, .container-title, .container-info {
            display: flex;
            align-items: center;
            gap: 5px;
            text-transform: uppercase;
            color: white;
        }

        .container-menu {
            display: flex;
            flex-direction: column;
        }

        .container-title {
            justify-content: center;
        }

        .title {
            font-size: 1.1em;
            color: white; /* Added text color for the title */
        }

        .container-info {
            gap: 25px;
        }

        .container-info_about {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .container-info_register {
            border: 1px solid black;
            padding: 10px;
            border-radius: 5px;
        }

        .info-image {
            margin: 2px;
        }
    </style>
</head>
<body>
<?php
    $pathImageMenu = "public/images/menu.png";
    $menu = "menu";
    $descriptionMenu = "menu icon";

    $pathImageLogo = "public/images/logo.png";
    $title = "privalia shop";
    $descriptionTitle = "menu icon";

    $pathImageInfo = "public/images/info.png";
    $descriptionInfo = "info icon";
    $aboutUs = "about us";

    $register = "register";
?>

<div class="container">
    <header>
        <menu class="container-menu">
            <img src="<?php echo $pathImageMenu; ?>" alt="<?php echo $descriptionMenu; ?>" />
            <span><?php echo $menu ?></span>
        </menu>

        <section class="container-title">
            <img src="<?php echo $pathImageLogo ?>" alt="<?php echo $descriptionTitle ?>" />
            <h1 class="title"><?php echo $title; ?></h1>
        </section>

        <section class="container-info">
            <div class="container-info_about">
                <img class="info-image" src="<?php echo $pathImageInfo ?>" alt="<?php echo $descriptionInfo ?>" />
                <span><?php echo $aboutUs ?></span>
            </div>
            <span class="container-info_register"><?php echo $register ?></span>
        </section>
    </header>
</div>
</body>
</html>
