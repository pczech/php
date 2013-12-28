<?php


//shallow copy
class Test3s {
  protected $member;

  function __construct($value) {
    echo __CLASS__ . '::' . __FUNCTION__ . ' ' . $value . '<br>';
    $this->member = $value;
  }

  function __destruct() {
    echo __CLASS__ . '::' . __FUNCTION__ . ' ' . $this->member . '<br>';
  }
}

$x = new Test3s('x');
$y = new Test3s('y');
echo '$x = $y<br>';
$x = $y;
echo 'Done<br>';
