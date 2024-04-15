<?php
class Circle {
    public $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    function getArea() {
        return 3.14 * ($this->radius * $this->radius);
    }
}

$lingkaran = new Circle(3);
echo "Luas lingkaran dengan jari-jari {$lingkaran->radius} adalah: " .  number_format($lingkaran->getArea(), 2, ',', '.');
