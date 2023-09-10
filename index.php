<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="public/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <title>Privalia Shop</title>
</head>
<body>
<?php
$storeData = include 'storeData.php';

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
            <?php foreach ($storeData["categories"] as $category) : ?>
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
