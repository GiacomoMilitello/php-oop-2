<?php

    include_once __DIR__ . '/models/Product.php';
    include_once __DIR__ . '/models/Category.php';
    include_once __DIR__ . '/models/Shop.php';

    $shop = new Shop();

    $catDog = new Category('Cani');
    $catCat = new Category('Gatti');

    $shop->addProduct(new Product('Cibo per cani', 10.99, $catDog, 'cibo', 'img/img1.jpeg'));
    $shop->addProduct(new Product('Gioco per gatti', 5.99, $catCat, 'gioco', 'img/img2.jpeg'));
    $shop->addProduct(new Product('Cuccia per cani', 49.99, $catDog, 'cuccia', 'img/img3.jpeg'));

    $arrayProdotti = $shop->getProducts();

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous' />
</head>

<body>

    <main class="container">
        <div class="row">
            <?php foreach( $arrayProdotti as $prodotto ): ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $prodotto->getImage() ?>" class="card-img-top" alt="<?= $prodotto->getTitle() ?>">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?= $prodotto->getTitle() ?>
                        </h4>
                        <p class="card-text">
                            Prezzo: <?= $prodotto->getPrice() ?> €
                            |
                            Categoria: <?= $prodotto->getCategory()->getName() ?>
                            |
                            Tipo: <?= $prodotto->getType() ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js' integrity='sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==' crossorigin='anonymous'></script>
</body>

</html>