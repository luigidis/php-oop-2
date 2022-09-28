<?php

trait Dimension
{

    public $dimensions = [0, 0, 0];

    public function setDimensions(float $width,float $height,float $depth)
    {
        $this->dimensions = [$width, $height, $depth];
    }
}
