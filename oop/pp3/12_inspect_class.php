<?php

$classes = get_declared_classes();

foreach($classes as $class) {
  echo $class . '<br>';
}

echo '<br>';

$class = 'PDO';
if (in_array($class, $classes)) {
  // properties
  echo $class . ' properties:<br>';
  $properties = get_class_vars($class);
  if (!count($properties)) {
    echo '<i>None</i><br>';
  }
  else {
    foreach($properties as $property => $value) {
      echo $property . '<br>';
    }
  }

  echo '<br>';

  //methods
  echo $class . ' methods:<br>';
  $methods = get_class_methods($class);
  foreach($methods as $method) {
    echo $method . '<br>';
  }
}
