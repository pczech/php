<?php

class HtmlStuff {
  static function startH1() {
    echo "<h1>\n";
  }

  static function endH1() {
    echo "</h1>\n";
  }
}


HtmlStuff::startH1();
echo "hello";
HtmlStuff::endH1();
