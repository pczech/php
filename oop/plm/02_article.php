<?php


interface Writter {
  function write(Article $a);
}

class XMLWritter implements Writter {
  function write(Article $a) {
    $ret = '<article>';
    $ret .= '<title>' . $a->title . '</title>';
    $ret .= '<author>' . $a->author . '</author>';
    $ret .= '<date>' . $a->date . '</date>';
    $ret .= '<category>' . $a->category . '</category>';
    $ret .= '</article>';
    return $ret;
  }
}

class JSONWritter implements Writter {
  function write(Article $a) {
    $array = array('article' => $a);
    return json_encode($array);
  }
}

class Article {
  public $title;
  public $author;
  public $date;
  public $category;

  function __construct($title, $author, $date, $category) {
    $this->title = $title;
    $this->author = $author;
    $this->date = $date;
    $this->category = $category;
  }

  function write(Writter $w) {
    return $w->write($this);
  }
}

$xmlwritter = new XMLWritter();
$jsonwritter = new JSONWritter();

$article = new Article('Polymorphism', 'John Dow', time(), 0);
echo $article->write($xmlwritter) . '<br>';
echo $article->write($jsonwritter) . '<br>';
