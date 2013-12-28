<?php

class Person {
  public $name;
  public $age;
}


$person = new Person;
$person->name = 'John';
//$person->age = '40';

if (is_object($person)) {
  echo '$person is object of class ' . get_class($person) . '<br>';
  echo 'Properties:<br>';
  $properties = get_object_vars($person);
  if (!count($properties)) {
    echo '<i>None</i><br>';
  }
  else {
    foreach ($properties as $property => $value) {
      echo "$property = $value<br>";
    }
  }
}

class A {
}


class B extends A {
}

$b = new B;

echo get_parent_class($b) . '<br>';
echo get_parent_class(B) . '<br>';
