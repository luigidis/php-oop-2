<?php

include_once __DIR__ . '/Product.php';

include_once __DIR__ . '/Dimension.php';

class PetGames extends Product {
    
    use Dimension;

    public $material;

    function __construct($param, $material)
    {
        parent::__construct($param);

        $this->material = $material;

        
    }
}