<?php 

include_once __DIR__ . '/PetFood.php';
include_once __DIR__ . '/PetSleep.php';




$data_crocchette = [
    "name" => "Crocchette di manzo",
    "price" => 19.99,
    "brand" => 'Royal Canin',
    "description" => "Le migliori crocchette sulla piazza",
    "weight" => 1.5 . 'kg',
];

$data_carne = [
    "name" => "Scelta dello Chef",
    "price" => 10.12,
    "brand" => "Cesar",
    "description" => "Cibo umido per Cane con Pollo alla Griglia,Riso integrale e Verdure",
    "weight" => 2.1 . 'kg',
];

$data_natural = [
    "name" => "Natural Trainer",
    "price" =>  19.79,
    "brand" => "Natural",
    "description" => "Cibo per gatti adulti con tacchino",
    "weight" => 3 . 'kg',
];
    

$crocchette = new PetFood($data_crocchette, '25/10/2023');

$carne_in_scatola = new PetFood($data_carne, '08/05/2024');

$croccantini_natural = new PetFood($data_natural, '15/09/2023');

var_dump($crocchette, $carne_in_scatola, $croccantini_natural) ;

//letto cani
$bedsure_sleep = [
    "name" => "Letto per Cani",
    "price" =>  65.99,
    "brand" => "Bedsure",
    "description" => "Divano per Cani Taglia grande in Foam",
    "weight" => 0.5 . 'kg',
];

$bedsure_dimensions = [
    "width" =>  89 . 'cm',
    "height" => 63 . 'cm',
    "depth" => 18 . 'cm',
];

//letto gatti

$cat_nest = [
    "name" => "Cat Nest",
    "price" => 28.00,
    "brand" => "Xbtianxia",
    "description" => "Duvano letto confortevole per gatti",
    "weight" => 0.5 . 'kg',
];

$cat_nest_dimensions = [
    "width" =>  32 . 'cm',
    "height" => 39 . 'cm',
    "depth" => 60 . 'cm',
];

$sleep_dogs = new PetSleep($bedsure_sleep, $bedsure_dimensions);
$xb_nest = new PetSleep ($cat_nest, $cat_nest_dimensions);

var_dump($sleep_dogs, $xb_nest);



// $cat_nest = [
//     "name" =>
//     "price" => 
//     "brand" =>
//     "description" =>
//     "weight" =>
// ];