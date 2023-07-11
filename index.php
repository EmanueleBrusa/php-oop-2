<?php
require __DIR__.'/products.php';
require __DIR__.'/food.php';
require __DIR__.'/accessories.php';
require __DIR__.'/toys.php';

$product1 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 'Royal Canin Mini Adult', 'Cane', '545g', ['prosciutto', 'riso']);
$product1->setPrice(43.99);

$product2 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', '600g', ['manzo', 'cereali']);
$product2->setPrice(44.99);

$product3 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', '400g', ['tonno', 'pollo', 'prosciutto']);
$product3->setPrice(34.99);

$product4 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', '30g', ['Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']);
$product4->setPrice(2.95);

$product5 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153 cm');
$product5->setPrice(184.99);

$product6 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Materiale Espanso', 'ND');
$product6->setPrice(2.29);

$product7 = new Toys ('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 'Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
$product7->setPrice(13.49);

$product8 = new Toys ('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 'Gatto', 'Morbido con codina corta', '8,5 cm x 10 cm');
$product8->setPrice(4.99);


/*var_dump($mangime1);
var_dump($mangime2);
var_dump($mangime3);
var_dump($mangime4);
var_dump($gabbia1);
var_dump($filtri1);
var_dump($gioco1);
var_dump($gioco2);*/

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <title>oop 2</title>
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach($products as $product) { ?>
        <div class="col-4">
            <div class="card">
                <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->item; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->item; ?></h5>
                    <p class="card-text"><?php echo $product->trait; ?></p>
                    <p class="card-text">Price: <?php echo $product->getPrice(); ?></p>
                </div>
            </div>
        </div> 
        <?php } ?>
    </div>
</div>
</body>
</html>