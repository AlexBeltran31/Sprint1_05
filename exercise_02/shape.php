<?php
require "triangle.php";
require "rectangle.php";
require "circle.php";

abstract class Shape {
    protected int $width;
    protected int $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    abstract public function getArea();
}

$triangle = new Triangle(10, 5);
echo "Triangle area: " . $triangle->getArea() . "\n";

$rectangle = new Rectangle(30, 15);
echo "Rectangle area: " . $rectangle->getArea() . "\n";

$circle = new Circle(12);
echo "Circle area: " . $circle->getArea() . "\n";