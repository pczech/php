<?php

class Test1 {
  protected $members = array();

  function __get($key) {
    echo __CLASS__ . '::__get()<br>';
    if (array_key_exists($key, $this->members)) {
      return $this->members[$key];
    }
    else {
      return 'No such luck<br>';
    }
  }

  function __set($key, $value) {
    echo __CLASS__ . '::__set()<br>';
    $this->members[$key] = $value;
  }

  function __isset($key) {
    echo __CLASS__ . '::__isset()<br>';
    return isset($this->members[$key]);
  }

  function __call($name, $argv) {
    echo __CLASS__ . '::__call()<br>';
    echo $name . ': ';
    foreach($argv as $arg) {
      echo $arg . ' ';
    }
    echo '<br>';
  }
}

$x = new Test1();

echo $x->speed_limit;
$x->speed_limit = '65 MPH';
if (isset($x->limit)) {

}
if (empty($x->limit)) {

}

$x->method(1,2, 'John');



class Test2 {
  protected $member;

  function __construct($value = 0) {
    $this->member = $value;
  }

  function __toString() {
    return __CLASS__ . ': ' . $this->member;
  }
}

$y = new Test2(1);

echo $y . '<br>';