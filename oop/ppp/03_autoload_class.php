<?php

class Employee {
  protected $name;
  protected $salary;

  function __construct($name, $salary = 100) {
    $this->name = $name;
    $this->salary = $salary;
  }

  function give_raise($amount) {
    $this->salary += $amount;

    echo "Employee $this->name got raise of $amount dollars<br>";
    echo "New salary is $this->salary dollars<br>";
  }

  function __destruct() {
    echo "Good bye, cruel world: EMPLOYEE: $this->name<br>";
  }
}

class Manager extends Employee {
  protected $department;

  function __construct($name, $salary, $department) {
    parent::__construct($name, $salary);
    $this->department = $department;
  }

  function give_raise($amount) {
    parent::give_raise($amount);
    echo "This employee is manager<br>";
  }

  function __destruct() {
    echo "Good bye, cruel world: MANAGER: $this->name<br>";
    parent::__destruct();
  }
}
