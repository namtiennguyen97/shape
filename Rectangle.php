<?php
include_once "Shape.php";

class Rectangle extends Shape
{
    public $width;
    public $height;
    // method
    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function calculateArea(){
        return $this->width * $this->height;
    }
    public function calculatePer(){
        return ($this->width+ $this->height)*2;
    }

}