<?php

trait Dimension
{

    public $dimensions = [0, 0, 0];

    public function setDimensions($width, $height, $depth)
    {
        $this->dimensions = [$width, $height, $depth];
    }
}
