<?php

include_once "Rectangle.php";
class Square extends Rectangle
{
    public function __construct($width)
    {
        $this->width = $width;
    }

    public function calculateArea()
{
    return $this->width * $this->width;
}
public function calculatePer()
{
    return $this->width * 4;
}
}