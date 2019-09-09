<?php

include_once "Shape.php";
class Circle extends Shape
{
public $radius;
//method
public function __construct($radius)
{
    $this->radius = $radius;
}

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
{
    return ($this->radius*$this->radius)* 3.14;
}
public function calculatePer(){
    return ($this->radius *2) *3.14;
}

}