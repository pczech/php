<?php

class Iter implements Iterator {
  private $items;
  private $index = 0;

  function __construct(array $items) {
    echo __CLASS__ . '::' . __FUNCTION__ . ' ' . $value . '<br>';
    $this->items = $items;
  }

  function current() {
    return $this->items[$this->index];
  }

  function key() {
    return $this->index;
  }

  function next() {
    $this->index++;
    if (isset($this->items[$this->index])) {
      return $this->items[$this->index];
    }
    else {
      return NULL;
    }
  }

  function rewind() {
    $this->index = 0;
  }

  function valid() {
    return isset($this->items[$this->index]);
  }
}

$x = new Iter(range('A', 'D'));
foreach($x as $key => $val) {
  echo "key: $key \tvalue: $val<br>";
}
