<?php

include_once "Circle.php";
class Cylinder extends Circle
{
public $height;
//method
public function __construct($radius,$height)
{
    parent::__construct($radius);
    $this->height= $height;
}
// A= 2*3.14*r*h
public function calculateArea()
{
    return 2*3.14* $this->radius*($this->radius+$this->height);
}
public function calculateVolume(){
    return 3.14 * ($this->radius * $this->radius)* $this->height;
}
}