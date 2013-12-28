<?php

class A {
  function hello() {
    echo __CLASS__ . '::' . __FUNCTION__ . '<br>';
  }
}

class B extends A {
  function hello() {
    echo __CLASS__ . '::' . __FUNCTION__ . '<br>';
  }
}

class C {
  function process(A $obj) {
    $obj->hello();
  }
}

$x = new A();
$y = new B();
$z = new C();

$z->process($x);
$z->process($y);
