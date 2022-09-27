<?php 

include_once __DIR__ . '/PetFood.php';




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
    

$crocchette = new PetFood($data_crocchette);

$carne_in_scatola = new PetFood($data_carne);

var_dump($crocchette, $carne_in_scatola);