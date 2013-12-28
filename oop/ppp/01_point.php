<?php

class Point {
  public $x;
  public $y;

  function __construct($x = 0, $y = 0) {
    $this->x = $x;
    $this->y = $y;
  }

  function get_x() {
    return $this->x;
  }

  function get_y() {
    return $this->y;
  }

  function dist($p) {
    return sqrt(pow($this->x - $p->get_x(), 2) +
                pow($this->y - $p->get_y(), 2));
  }
}

$p1 = new Point(2,3);
$p2 = new Point(3,4);

echo $p1->dist($p2) . '<br>';
$p2->x = 5;
echo $p1->dist($p2) . '<br>';
