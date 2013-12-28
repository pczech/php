<?php

class Person {
  public $age = 0;

  public function getAge() {
    return $this->age;
  }

  public function incYear() {
    $this->incAge();
  }

  public function show() {
    echo $this->getAge() . '<br>';
  }

  //private method can be accessed only by methods inside the same object
  private function incAge() {
    $this->age++;
  }

  protected function setAge($age) {
    $this->age = $age;
  }
}

class Man extends Person {
  public function init($age) {
    // PHP Fatal error:  Call to private method Person::incAge()
    // $this->incAge();

    $this->setAge($age);
  }
}

$person = new Person;
$person->show();

// PHP Fatal error:  Call to private method Person::incAge()
// $person->incAge();
// $person->show();

$person->incYear();
$person->show();

// PHP Fatal error:  Call to protected method Person::setAge()
// $person->setAge(10);
// $person->show();


$man = new Man;
$man->init(20);
$man->show();
