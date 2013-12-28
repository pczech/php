<?php

class Person {
  public $name = 'John Dow';

  function show() {
    echo $this->name . '<br>';
  }
}

$class = 'Person';

$person = new $class;
$person->show();

$tmp = 'person';
${$tmp}->show();