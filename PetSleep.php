<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Dimension.php';

class PetSleep extends Product
{

    use Dimension;


    function __construct($param)
    {
        parent::__construct($param);
    }
}

//Domanda quando io vado a usare un trait non posso usare poi il costruttore per andarte a modificare ciò che c'è scritto nel trait?
