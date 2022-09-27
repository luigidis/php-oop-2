<?php

include_once __DIR__ . '/Product.php';

class PetSleep extends Product {

    public $lenght;
    public $height;

    function __construct($dimensions)
    {
        $this->height = $dimensions['height'];
        $this->widht = $dimensions['width'];
        $this->depth = $dimensions['depth'];
    }
}