<?php

    include_once __DIR__ . '/models/Product.php';
    include_once __DIR__ . '/models/Category.php';
    include_once __DIR__ . '/models/Shop.php';

    $shop = new Shop();

    $dog = new Category('Cani', '<svg width="25px" height="25px" fill="gold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM160.9 286.2c4.8 1.2 9.9 1.8 15.1 1.8c35.3 0 64-28.7 64-64V160h44.2c12.1 0 23.2 6.8 28.6 17.7L320 192h64c8.8 0 16 7.2 16 16v32c0 44.2-35.8 80-80 80H272v50.7c0 7.3-5.9 13.3-13.3 13.3c-1.8 0-3.6-.4-5.2-1.1l-98.7-42.3c-6.6-2.8-10.8-9.3-10.8-16.4c0-2.8 .6-5.5 1.9-8l15-30zM160 160h40 8v32 32c0 17.7-14.3 32-32 32s-32-14.3-32-32V176c0-8.8 7.2-16 16-16zm128 48a16 16 0 1 0 -32 0 16 16 0 1 0 32 0z"/></svg>');
    $cat = new Category('Gatti', '<svg width="25px" height="25px" fill="gold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM160 154.4c0-5.8 4.7-10.4 10.4-10.4h.2c3.4 0 6.5 1.6 8.5 4.3l40 53.3c3 4 7.8 6.4 12.8 6.4h48c5 0 9.8-2.4 12.8-6.4l40-53.3c2-2.7 5.2-4.3 8.5-4.3h.2c5.8 0 10.4 4.7 10.4 10.4V272c0 53-43 96-96 96s-96-43-96-96V154.4zM216 288a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm96-16a16 16 0 1 0 -32 0 16 16 0 1 0 32 0z"/></svg>');

    try {
        $product1 = new Product('Cibo per cani', 10.99, $dog, 'cibo', 'img/img1.jpeg');
        $product1->setDiscount(10);
        $shop->addProduct($product1);

        $product2 = new Product('Gioco per gatti', 5.99, $cat, 'gioco', 'img/img2.jpeg');
        $product2->setDiscount(15);
        $shop->addProduct($product2);

        $product3 = new Product('Cuccia per cani', 49.99, $dog, 'cuccia', 'img/img3.jpeg');
        $product3->setDiscount(20);
        $shop->addProduct($product3);
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }

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

    <main class="container pt-5">

        <h1 class="text-center text-warning my-5 fw-bold ">ARCACANET</h1>

        <div class="row">
            <?php foreach( $arrayProdotti as $prodotto ): ?>
            <div class="col">
                <div class="card mt-5">
                    <img src="<?= $prodotto->getImage() ?>" class="card-img-top" alt="<?= $prodotto->getTitle() ?>">
                    <div class="card-body">
                        <h4 class="card-title text-warning text-center fw-bold">
                            <?= $prodotto->getTitle() ?>
                        </h4>
                        <p class="card-text text-center">
                            Prezzo: <?= $prodotto->applyDiscount() ?> € (scontato)
                            |
                            Categoria: <?= $prodotto->getCategory()->getIcon() ?>
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