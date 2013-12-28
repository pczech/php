<?php

class Person {
  public $name = 'John Dow';
  final function getName() {
    return $this->name;
  }
}

class Child extends Person {
  // PHP Fatal error:  Cannot override final method Person::getName()
  function getName() {
    return 'Little ' . $this->name;
  }
}

$child = new Child;
echo $child->getName();