<?php

include_once __DIR__ . '/Product.php';

class PetGames extends Product {
    
    public $material;

    function __construct($param, $material)
    {
        parent::__construct($param);

        $this->material = $material;
    }
}