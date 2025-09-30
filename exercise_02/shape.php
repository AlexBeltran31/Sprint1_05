<?php
$s = require_once('rectangle.php');
$s = require_once('triangle.php');

abstract class Shape {
    protected int $width;
    protected int $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

$triangle = new Triangle(10, 5);
echo "Triangle area: " . $triangle->getArea() . "\n";

$rectangle = new Rectangle(30, 15);
echo "Rectangle area: " . $rectangle->getArea() . "\n";