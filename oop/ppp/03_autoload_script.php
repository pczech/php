<?php

function __autoload($class) {
  switch($class) {
    case 'Manager':
    case 'Employee':
      require_once("03_autoload_class.php");
      break;
  }
}

$mgr = new Manager('Smith', 300, 20);
$mgr->give_raise(50);
$emp = new Employee('Johnson', 100);
$emp->give_raise(50);
