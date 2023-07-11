<?php
require __DIR__.'/products.php';
require __DIR__.'/food.php';
require __DIR__.'/accessories.php';
require __DIR__.'/toys.php';

$mangime1 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 'Royal Canin Mini Adult', 'Cane', '545g', ['prosciutto', 'riso']);
$mangime1->setPrice(43.99);

$mangime2 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', '600g', ['manzo', 'cereali']);
$mangime2->setPrice(44.99);

$mangime3 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', '400g', ['tonno', 'pollo', 'prosciutto']);
$mangime3->setPrice(34.99);

$mangime4 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', '30g', ['Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']);
$mangime4->setPrice(2.95);

$gabbia1 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153 cm');
$gabbia1->setPrice(184.99);

$filtri1 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Materiale Espanso', 'ND');
$filtri1->setPrice(2.29);

$gioco1 = new Toys ('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 'Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
$gioco1->setPrice(13.49);

$gioco2 = new Toys ('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 'Gatto', 'Morbido con codina corta', '8,5 cm x 10 cm');
$gioco2->setPrice(4.99);


var_dump($mangime1);
var_dump($mangime2);
var_dump($mangime3);
var_dump($mangime4);
var_dump($gabbia1);
var_dump($filtri1);
var_dump($gioco1);
var_dump($gioco2);

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

</body>
</html>