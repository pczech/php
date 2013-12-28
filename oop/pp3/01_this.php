<?php

class Person {
  public $name = '';

  // Methods use the $this variable to access the properties of the current
  // object and to call other methods on that object.
  function getName() {
    return $this->name;
  }

  function testName1() {
    $this->name = 'John';
    return $this->getName();
  }

  function testName2() {
    // Local variable $name is created.
    $name = 'Mickey';
    return $this->getName();
  }

  function testName3() {
    $this->name = 'Tim';
    // PHP Fatal error:  Call to undefined function getName()
    return getName();
  }

  function testName4() {
    // Local variable $name is created.
    $name = 'James';
    return getName();
  }

  function testName5() {
    // PHP Notice:  Undefined variable: name.
    return $name;
  }
}

$john = new Person();
//print_r($john);

echo $john->testName1() . '<br>';
echo $john->testName2();
//echo $john->testName3();
//echo $john->testName4();
echo $john->testName5();
