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
    abstract public function calculateArea();
}

$triangle = new Triangle(10, 5);
echo "Triangle area: " . $triangle->calculateArea() . "\n";

$rectangle = new Rectangle(30, 15);
echo "Rectangle area: " . $rectangle->calculateArea() . "\n";

$circle = new Circle(12);
echo "Circle area: " . $circle->calculateArea() . "\n";