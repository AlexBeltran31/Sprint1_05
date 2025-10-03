<?php
class Circle extends Shape {
    public function __construct($radio) {
        parent::__construct($radio, 0); //guardamos el radio en width
        //ya que la clase padre espera dos parametros
    }
    public function calculateArea() {
        $pi = 3.1415;
        $area = $pi * ($this->width * $this->width);
        return $area;
    }
}