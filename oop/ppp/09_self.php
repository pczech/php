<?php

class A {
  protected static $property = 2;

  function __construct() {
    self::$property *= 2;
  }

  function get_property() {
    return self::$property;
  }
}

class B extends A {
  protected static $property = 3;

  function __construct() {
    self::$property *= 3;
  }

  // function get_property() {
  //   return self::$property;
  // }
}

$x = new A();
$y = new B();

echo $x->get_property() . '<br>';
echo $y->get_property() . '<br>';
