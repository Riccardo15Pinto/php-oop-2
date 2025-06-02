<?php

include_once __DIR__ . '/models/Store.php';
include_once __DIR__ . '/models/Article.php';
include_once __DIR__ . '/models/Customer.php';

$dog = new Customer('dog');

$dog_article = new Article('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 545, 43.99, 'prociutto,riso', $dog);
$cat_article = new Article('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 545, 43.99, 'prociutto,riso', $dog);
$bird_article = new Article('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 545, 43.99, 'prociutto,riso', $dog);

var_dump($dog);
var_dump($dog_article);
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
                <img src='<?= $article->getImage() ?>' alt="">
                <h1><?= $article->getName() ?></h1>
                <h1><?= $article->getWeight() ?></h1>
                <h1><?= $article->getPrice() ?></h1>
                <h1><?= $article->getIngredients() ?></h1>
                <h1><?= $article->tipology->getTipology() ?></h1>


            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>