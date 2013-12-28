<?php

//The class that has an undeclared $name property.
class Person {
  function getName() {
    return $this->name;
  }

  function setName($name) {
    $this->name = $name;
  }

  function show() {
    echo $this->name . '<br>';
  }
}


$person = new Person;
$person->setName('John');
$person->show();


class Man {
  public $name;
  protected $age;
  private $salary;

  protected function getSalary() {
    return $this->salary;
  }

  protected function setSalary($salary) {
    $this->salary = $salary;
  }
}

class Employee extends Man {
  function setAge($age) {
    $this->age = $age;
  }

  //public wrapper for protected Man::setSalary().
  //Warning: recursive call!
  function setSalary($salary) {
    //$this->setSalary($salary);
  }

  function show() {
    echo 'Name: ' . $this->name . '<br>';
    echo 'Age: ' . $this->age . '<br>';
    // PHP Fatal error:  Cannot access private property Man::$salary
    // echo 'Salary: ' . $this->salary . '<br>';
    echo 'Salary: ' . $this->getSalary() . '<br>';
  }
}

$man = new Man;
$man->name = 'John';
// PHP Fatal error:  Cannot access protected property Man::$age
// $man->age = 40;

// PHP Fatal error:  Cannot access private property Man::$salary
// $man->salary = 1000;

$employee = new Employee;
$employee->name = 'James';

//$employee->setAge(30);
//$employee->setSalary(2000);
//$employee->show();


/**
 * static property
 */
class Pupil {
  static $objCounter = 0;
  function __construct() {
    self::$objCounter++;
    echo 'Pupil ' . self::$objCounter . ' created<br>';
  }
}

$classMates = array();
$classMatesnew[] = new Pupil;
$classMatesnew[] = new Pupil;
echo 'Number of Pupil objects: ' . Pupil::$objCounter . '<br>';

/**
 * Constants
 */
class Teacher {
  const ROLE = 'Teacher';

  function getRole() {
    return self::ROLE;
  }
}

echo Teacher::ROLE . '<br>';

$teacher = new Teacher;
echo $teacher->getRole() . '<br>';
