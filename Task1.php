<?php

class Shape {
    public function area() {
        return 0;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}


class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}


class Square extends Rectangle {
    public function __construct($sideLength) {
        parent::__construct($sideLength, $sideLength);
    }
}


$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
$square = new Square(4);

echo "Circle area: " . number_format($circle->area(), 2) . "\n";
echo "Rectangle area: " . number_format($rectangle->area(), 2) . "\n";
echo "Square area: " . number_format($square->area(), 2) . "\n";

?>
