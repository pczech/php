<?php

abstract class Person {
  abstract function show();
}

// $person = new Person;
// $person->show();


class Employee extends Person {
  function show() {
    echo get_class($this);
  }
}

$employee = new Employee;
$employee->show();
