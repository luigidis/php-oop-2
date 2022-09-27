<?php

include_once __DIR__ . '/Product.php';

class PetSleep extends Product {

    public $width;
    public $height;
    public $depth;

    function __construct($param, $dimensions)
    {
        parent::__construct($param);

        $this->width = $dimensions['width'];
        $this->height = $dimensions['height'];
        $this->depth = $dimensions['depth'];
    }
}