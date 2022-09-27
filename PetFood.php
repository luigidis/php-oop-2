<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product {
    
    public $expiry_date;
    
    function __construct($param, $exp = 0)
    {
        parent::__construct($param);

        $this->expiry_date = $exp;
    }
}