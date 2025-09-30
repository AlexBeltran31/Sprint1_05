<?php
$s = require_once('cat.php');
$s = require_once('dog.php');

abstract class Animal {
    private string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract protected function talk();

    public function getName() {
        return $this->name;
    }
}

$cat = new cat("Rocket");
echo "The cat's name is " . $cat->getName() . ". " . $cat->talk() . "\n";

$dog = new dog("Boni");
echo "The dog's name is " . $dog->getName() . ". " . $dog->talk() . "\n";