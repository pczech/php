<?php

interface Shape {
  function getArea();
}

class Rectangle implements Shape {
  public $a;
  public $b;

  function __construct($a, $b) {
    $this->a = $a;
    $this->b = $b;
  }

  function getArea() {
    return $this->a * $this->b;
  }
}

class Square implements Shape {
  public $a;

  function __construct($a) {
    $this->a = $a;
  }

  function getArea() {
    return $this->a * $this->a;
  }
}

class Circle implements Shape {
  public $r;

  function __construct($r) {
    $this->r = $r;
  }

  function getArea() {
    return 3.14 * $this->r * $this->r;
  }
}

function calculateArea(Shape $shape) {
  return $shape->getArea();
}

$shapes = array(new Square(2), new Rectangle(2,3), new Circle(1));

foreach($shapes as $shape) {
  echo 'Area: ' . calculateArea($shape) . '<br>';
}
