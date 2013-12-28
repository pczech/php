<?php

interface Printable {
  function printout();
}

class Person implements Printable {
  function printout() {
    echo get_class($this);
  }
}


$person = new Person;
$person->printout();
