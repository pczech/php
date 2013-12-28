<?php

interface Talkative {
  function speak();
}

class Animal {
  public $name;

  function __construct($name) {
    $this->name = $name;
  }
}

class Dog extends Animal implements Talkative {
  function speak() {
    echo $this->name . ': ' . 'Woof, woof<br>';
  }
}

class Cat extends Animal implements Talkative {
  function speak() {
    echo $this->name . ': ' . 'Meow...<br>';
  }
}

class Robot implements Talkative {
  function speak() {
    echo 'I am a talkative robot<br>';
  }
}

class Trainer {
  function makeItSpeak(Talkative $pet) {
    $pet->speak();
  }
}

$trainer = new Trainer();
$pets = array(new Dog('Snoopy'), new Cat('Garfield'), new Robot());

foreach ($pets as $pet) {
  $trainer->makeItSpeak($pet);
}
