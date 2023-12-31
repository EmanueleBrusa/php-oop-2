<?php
require __DIR__.'/products.php';
require __DIR__.'/food.php';
require __DIR__.'/accessories.php';
require __DIR__.'/toys.php';

$product1 = new Food('https://www.planetfarm.it/5654-large_default/royal-canin-mini-adult-12-35kg.jpg', 'Royal Canin Mini Adult', 'Cane', '545g', ['prosciutto', 'riso']);
$product1->setPrice(43.99);

//modifico la grandezza dell'immagine
/*$imageUrl = $product1->pic;
$modifiedImageUrl = $product1->modifyImageUrlSize($imageUrl, 100, 100);
$product1->pic = $modifiedImageUrl;*/

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

$products = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
    $product6,
    $product7,
    $product8
];
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
    <h1 class="mb-5">Boolshop</h1>
    <div class="row">
        <h2>I nostri prodotti</h2>
        <?php foreach($products as $product) { ?>
        <div class="col-4 mb-4">
            <div class="card card-height">
                <img src="<?php echo $product->pic; ?>" class="pic-product" alt="<?php echo $product->item; ?>">
                <div class="card-body bg-white">
                    <ul class="list-unstyled">
                        <li>
                            <h3>
                                <?php echo $product->item ?>
                            </h3>
                        </li>
                        <li>
                            <div class="animals">
                                <i class="fa-solid <?php if($product->animal === 'Cane'){
                                    echo 'fa-dog';
                                } else if($product->animal === 'Gatto'){
                                    echo 'fa-cat';
                                } else if($product->animal === 'Pesce'){
                                    echo 'fa-fish';
                                } else if($product->animal === 'Uccello'){
                                    echo 'fa-dove';
                                } ?>"></i>
                                <?php echo $product->animal ?>
                            </div>
                        </li>
                        <div class="price">
                            Prezzo: &euro; <?php echo $product->getPrice() ?>
                        </div>
                        <li>
                            <?php if(isset($product->weight)){
                                echo 'Peso Netto: '.$product->weight;
                            } else if(isset($product->materials)){
                                echo 'Materiale: '.$product->materials;
                            } else if(isset($product->traits)){
                                echo 'Caratteristiche: '.$product->traits;
                            } ?>
                        </li>
                        <li>
                            <?php if(isset($product->ingredients)){
                                echo 'Ingredienti: ';
                                foreach($product->ingredients as $ingredient){
                                    echo $ingredient.', ';
                                };
                            } else if(isset($product->size)){
                                echo 'Dimensioni: '.$product->size;
                            } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
        <?php } ?>
    </div>
</div>
</body>
</html>