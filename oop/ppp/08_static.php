<?php

class Test4 {
  private static $objcnt;

  function __construct() {
    ++self::$objcnt;
  }

  function get_objcnt() {
    return self::$objcnt;
  }

  static function static_get_objcnt() {
    return self::$objcnt;
  }

  function bad_get_objcnt() {
    return $this->objcnt;
  }
}

$x = new Test4();
$y = new Test4();
echo '$x->get_objcnt(): ' . $x->get_objcnt() . '<br>';
echo '$x->static_get_objcnt(): ' . $x->static_get_objcnt() . '<br>';
// PHP Notice:  Undefined property: Test4::$objcnt
// echo '$x->bad_get_objcnt(): ' . $x->bad_get_objcnt() . '<br>';

echo 'Test4::get_objcnt(): ' . Test4::get_objcnt() . '<br>';
echo 'Test4::static_get_objcnt(): ' . Test4::static_get_objcnt() . '<br>';
// PHP Fatal error:  Using $this when not in object context
// echo 'Test4::bad_get_objcnt(): ' . Test4::bad_get_objcnt() . '<br>';
