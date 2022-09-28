<?php 

include_once __DIR__ . '/PetFood.php';
include_once __DIR__ . '/PetSleep.php';
include_once __DIR__ . '/PetGames.php';
include_once __DIR__ . '/User.php';


//Cibo 1

$data_crocchette = [
    "name" => "Crocchette di manzo",
    "price" => 19.99,
    "brand" => 'Royal Canin',
    "description" => "Le migliori crocchette sulla piazza",
    "weight" => 1.5 . 'kg',
];

// Cibo 2

$data_carne = [
    "name" => "Scelta dello Chef",
    "price" => 10.12,
    "brand" => "Cesar",
    "description" => "Cibo umido per Cane con Pollo alla Griglia,Riso integrale e Verdure",
    "weight" => 2.1 . 'kg',
];

//Cibo 3

$data_natural = [
    "name" => "Natural Trainer",
    "price" =>  19.79,
    "brand" => "Natural",
    "description" => "Cibo per gatti adulti con tacchino",
    "weight" => 3 . 'kg',
];
    
// Creo le istanze per PetFood

$crocchette = new PetFood($data_crocchette, '25/10/2023');
$crocchette->setDimensions(10,15,25);

$carne_in_scatola = new PetFood($data_carne, '08/05/2024');
$carne_in_scatola->setDimensions(25,35,46);

$croccantini_natural = new PetFood($data_natural, '15/09/2023');
$croccantini_natural->setDimensions(15,12,8);

// var_dump($crocchette, $carne_in_scatola, $croccantini_natural) ;

//Letto cane 
$bedsure_sleep = [
    "name" => "Letto per Cani",
    "price" =>  'ciao',
    "brand" => "Bedsure",
    "description" => "Divano per Cani Taglia grande in Foam",
    "weight" => 0.5 . 'kg',
];



//Letto gatto

$cat_nest = [
    "name" => "Cat Nest",
    "price" => 28.00,
    "brand" => "Xbtianxia",
    "description" => "Duvano letto confortevole per gatti",
    "weight" => 0.5 . 'kg',
];




//Creo le istanze per PetSleep
try {
    $sleep_dogs = new PetSleep($bedsure_sleep);
    $sleep_dogs->setDimensions(89,63,18);
} catch(Exception $e) {
    echo $e->getMessage();
};
$xb_nest = new PetSleep ($cat_nest);
$xb_nest->setDimensions(32,39,60);

// var_dump($sleep_dogs, $xb_nest);

//Primo giocattolo

$dog_toy_first = [
    "name" => "Rubbe Ball",
    "price" => "11.18",
    "brand" => "Sheens",
    "description" => "Giocando a masticare",
    "weight" => 40 . 'g',
];
     



//Creo le istanze per PetGames

$rubbe = new PetGames($dog_toy_first, 'Gomma ultra resistente');
$rubbe->setDimensions(50, 30, 20);

var_dump($rubbe);




