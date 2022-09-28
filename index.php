<?php

include_once __DIR__ . '/db.php';

include_once __DIR__ . '/Dimension.php';

var_dump($crocchette, $carne_in_scatola, $croccantini_natural); //Istanze PetFood

var_dump($sleep_dogs, $xb_nest); //Istanze PetSleep

var_dump($rubbe); //Istanze PetGames

var_dump($user_one); //Istanza del nostro User

// var_dump($crocchette->price);

$quantity_one = 2;
$quantity_two = 1;
$quantity_three = 1;

$cart = [
    [
        "selected_product" => $crocchette,
        "quantity" => $quantity_one,
        "price" => ($crocchette->price * $quantity_one),
    ],
    [
        "selected_product" => $xb_nest,
        "quantity" => $quantity_two,
        "price" => ($xb_nest->price * $quantity_two),
    ],
    [
        "selected_product" => $rubbe,
        "quantity" => $quantity_three,
        "price" => ($rubbe->price * $quantity_three),
    ]
];

$end_price = 0;

for ($i = 0; $i < count($cart); $i++) {
    $current_price = $cart[$i]['price'];
    var_dump($current_price);
    $total_price = $current_price + $end_price;
    $end_price = $total_price;
    var_dump($end_price);
};


for ($i = 0; $i < count($cart); $i++) {
    echo 'Prodotto selezionato' . ' ' . $cart[$i]['selected_product']->name . '<br>';
    echo 'Quantità scelta' . ' ' .  $cart[$i]['quantity'] . '<br>';
    echo 'Prezzo' . ' ' . $cart[$i]['price'] . ' ' . 'Euro' . '<br>';
    echo '<br>';
}

echo 'Final Price' . ' ' . $end_price . ' ' . 'Euro';



// var_dump($cart);
