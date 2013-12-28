<?php

class Person {
  public $name;

  function __construct($name = 'John') {
    //echo get_class($this) . '::__construct()' . '<br>';
    echo __CLASS__ . '::__construct()' . '<br>';

    $this->name = $name;
  }

  function __destruct() {
    echo __CLASS__ . '::__destruct()' . '<br>';
  }
}


class Employee extends Person {
  public $salary;

  function __construct($name = 'John', $salary = 1000) {
    parent::__construct($name);
    echo __CLASS__ . '::__construct()' . '<br>';
    $this->salary = $salary;
  }

  function __destruct() {
    parent::__destruct();
    echo __CLASS__ . '::__destruct()' . '<br>';
  }
}

// $person = new Person;
$employee = new Employee('James', 2000);
