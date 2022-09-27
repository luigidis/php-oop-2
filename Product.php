<?php

class Product
{
    public $name;
    public $price;
    public $brand;
    public $media;
    public $description;
    public $weight;
    public $volume;
    public $categories;

    function __construct($param)
    {
        $this->name = $param['name'];
        $this->price = $param['price'];
        $this->brand = $param['brand'];
        // $this->media = $param['media'];
        $this->description = $param['description'];
        $this->weight = $param['weight'];
        // $this->volume = $param['volume'];
        // $this->categories = $param['categories'];
    }

    public function setPrice($price)
    {
    }
}
