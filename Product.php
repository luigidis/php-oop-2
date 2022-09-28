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
        $this->setPrice($param);
        $this->brand = $param['brand'];
        // $this->media = $param['media'];
        $this->description = $param['description'];
        $this->weight = $param['weight'];
        // $this->volume = $param['volume'];
        // $this->categories = $param['categories'];
    }
    
    public function setPrice($param)
    {
        if ($param['price'] >= 0 && is_numeric($param['price'])) {

            $this->price = $param['price'];
        } else {
            throw new Exception('Errore nel prezzo');
        }
    }
}
