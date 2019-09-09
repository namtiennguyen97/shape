<?php
include"Shape.php";
include "Rectangle.php";
include "Circle.php";
include "Square.php";
include "Cylinder.php";
// khai bao va hien thi

$rectangle = new Rectangle(20,30);
echo 'Dien tich hinh chu nhat la: '.$rectangle->calculateArea();
echo "<br>";
echo 'Chu vi hinh chu nhat la: '.$rectangle->calculatePer();
echo "<br>";
// hinh tron
$circle = new Circle(20);
echo "Dien tich hinh tron la: ". $circle->calculateArea();
echo '<br>';
echo "Chu vi hinh tron la: ".$circle->calculatePer();
echo "<br>";
//hinh vuong
$square = new Square(30);
echo "Dien tich hinh vuong la: ".$square->calculateArea();
echo "<br>";
echo "Chu vi hinh vuong la: ".$square->calculatePer();
echo "<br>";
//hinh tru
$cylinder = new Cylinder(10,50);
echo "The tich hinh tru la: ".$cylinder->calculateVolume();
echo "<br>";
echo "Dien tich toan phan hinh tru la: ".$cylinder->calculateArea();
