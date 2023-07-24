<?php

include_once __DIR__ . '/models/Store.php';
include_once __DIR__ . '/models/Article.php';
include_once __DIR__ . '/models/Customer.php';

$dog = new Customer('dog');

$dog_article = new Article('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 545, 43.99, 'prociutto,riso', $dog);
$cat_article = new Article('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 545, 43.99, 'prociutto,riso', $dog);
$bird_article = new Article('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 545, 43.99, 'prociutto,riso', $dog);

$shop_article = [$dog_article, $cat_article, $bird_article];

$store = new Store($shop_article);


var_dump($store);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($store->product as $article) : ?>
            <li>
                <h1><?= $article->getName() ?></h1>
                <img src="<?= $article->getImage() ?>" alt="">
                <?php foreach ($article as $type->tipology) : ?>

                    <h1><?= $type->getTipology() ?></h1>
                <? endforeach ?>
            </li>
        <? endforeach ?>
    </ul>
</body>

</html>