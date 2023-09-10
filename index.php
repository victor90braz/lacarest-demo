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
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        .container {
            height: 100vh;
            background: #D47597;
            padding: 20px;
        }

        .container-header {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 5px;
        }

        img {
            width: 20px;
            height: 20px;
        }

        .container-menu, .container-title, .container-info {
            display: flex;
            align-items: center;
            gap: 5px;
            text-transform: uppercase;
            color: white;
        }

        .container-menu {
            flex-direction: column;
        }

        .container-title {
            justify-content: center;
        }

        .title {
            font-size: 1.1em;
            color: white;
        }

        .container-info {
            gap: 25px;
        }

        .container-info_about {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container-info_register {
            border: 1px solid black;
            padding: 10px;
            border-radius: 5px;
        }

        .info-image {
            margin: 2px;
        }

        .container-main {
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70vh;
        }

        .container-main_greeting {
            text-transform: uppercase;
            font-weight: bold;
        }

        .container-main_categories {
            padding: 10px;
        }

        .container-main_categories ul {
            display: flex;
            list-style-type: none;
            justify-content: space-evenly;
            align-items: center;
            padding: 0;
        }

        .container-main_categories ul li:hover {
            background-color: #0080007d;
            color: white;
            padding: 2px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
$pathImages = [
    "menu" => "public/images/menu.png",
    "logo" => "public/images/logo.png",
    "info" => "public/images/info.png",
];

$menu = "menu";
$title = "privalia shop";
$aboutUs = "about us";
$register = "register";
$logged = false;

$greeting = !$logged ? "Please $register" : "Welcome to $title";

$categories = [
    "all categories", "children's", "fashion & beauty",
    "footwear", "home & tech", "sports", "travel", "gourmet"
];
?>

<div class="container">
    <header class="container-header">
        <menu class="container-menu">
            <img src="<?= $pathImages['menu'] ?>" alt="Menu Icon" />
            <span><?= $menu ?></span>
        </menu>

        <section class="container-title">
            <img src="<?= $pathImages['logo'] ?>" alt="Logo" />
            <h1 class="title"><?= $title ?></h1>
        </section>

        <section class="container-info">
            <div class="container-info_about">
                <img class="info-image" src="<?= $pathImages['info'] ?>" alt="Info Icon" />
                <span><?= $aboutUs ?></span>
            </div>
            <span class="container-info_register"><?= $register ?></span>
        </section>
    </header>

    <nav class="container-main_categories">
        <ul>
            <?php foreach ($categories as $category) : ?>
                <li><?= $category ?></li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <main class="container-main">
        <span class="container-main_greeting"><?= $greeting ?></span>
    </main>
</div>
</body>
</html>
