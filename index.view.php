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
        <section class="container-main_greeting"><?= $greeting ?></section>

        <section class="container-main_products">
            <h2>List of Products</h2>
            <div class="container-products">
                <?php foreach ($storeData["products"] as $product) : ?>
                    <ul class="list-products">
                        <li><?=$product["name"] ?></li>
                        <li><?=$product["category"] ?></li>
                        <li><?=$product["price"] ?></li>
                        <li><?=$product["description"] ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container-main_detail">
            <div class="detail-product">
                <h2><?= "Detail Product" ?></h2>
                <?php foreach ($storeData["products"] as $product) : ?>
                    <?php if ($product["name"] === "Laptop") : ?>
                        <h3><?= $product["name"] ?></h3>
                        <ul class="list-products">
                            <li><?=$product["name"] ?></li>
                            <li><?=$product["category"] ?></li>
                            <li><?=$product["price"] ?></li>
                            <li><?=$product["description"] ?></li>
                        </ul>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container-user">
            <h3>Search user</h3>
            <?php foreach ($filteredUsers as $user) : ?>
                <p> <?= $user["name"] ?> </p>
                <p> <?= $user["address"] ?> </p>
                <p> <?= $user["city"] ?> </p>
                <p> <?= $user["address"] ?> </p>
                <p> <?= $user["country"] ?> </p>
                <p> <?= $user["email"] ?> </p>
            <?php endforeach; ?>
        </section>

        <section class="container-prices">
            <h3>Filter Prices</h3>
            <?php foreach ($filteredPrices as $price) :?>
                <p><?= $price['price']?></p>
            <?php endforeach; ?>
        </section>
    </main>
</div>
</body>
</html>