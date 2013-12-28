<?php

//deep copy (cloning)
class Test3d {
  protected $member;
  protected $copies;

  function __construct($value, $copies = 0) {
    echo __CLASS__ . '::' . __FUNCTION__ . ' ' . $value . '<br>';
    $this->member = $value;
    $this->copies = $copies;
  }

  function __destruct() {
    echo __CLASS__ . '::' . __FUNCTION__ . ' ' . $this->member . '<br>';
  }

  function __clone() {
    echo __CLASS__ . '::' . __FUNCTION__ . ' ' . $this->member . '<br>';
    $this->member .= ':CLONE';
    $this->copies++;
  }

  function print_copies() {
    echo "Object $this->member has $this->copies copies.<br>";
  }
}

$x = new Test3d('A');
$x->print_copies();
$y = new Test3d('B');
$y->print_copies();
$x = clone $y;
$z = clone $x;
$x->print_copies();
$y->print_copies();
$z->print_copies();

