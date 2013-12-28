<?php

class Animal {
  public $name;

  function __construct($name) {
    $this->name = $name;
  }
}

class Dog extends Animal {
  function speak() {
    echo $this->name . ': ' . 'Woof, woof<br>';
  }
}

class Cat extends Animal {
  function speak() {
    echo $this->name . ': ' . 'Meow...<br>';
  }
}

$cat = new Cat('Snowball');
$dog = new Dog('Skip');

$cat->speak();
$dog->speak();

echo "Array of animals<br>";
$animals = array(new Dog('Snoopy'), new Cat('Garfield'));
foreach($animals as $animal) {
  $animal->speak();
}
