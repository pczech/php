<?php

class Person {
  public $name, $address, $age;
  function show() {
    echo 'Name: ' . $this->name . '<br>';
  }

  protected function setName($name) {
    $this->name = $name;
  }
}

class Employee extends Person {
  public $position, $salary;

  function show() {
    parent::show();
    echo 'Salary: ' . $this->salary . '<br>';
  }

  //public wrapper for Person::setName()
  function setName($name) {
    parent::setName($name);
    self::show();
  }
}


$employee = new Employee;

$employee->name = 'John';
$employee->salary = 1000;
$employee->show();

$employee->setName('James');

if ($employee instanceof Employee) {
  echo '$employee is instance of Employee class<br>';
}

if ($employee instanceof Person) {
  echo '$employee is instance of Person class<br>';
}
