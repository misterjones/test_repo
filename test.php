<?php

class TestMonkey {

  public $property;
  public $enemy;

  function method($property, $enemy) {
    $this->$property = $argument;
    $this->$enemy = $enemy;
  }

}

function hello($world) {
  echo "Hello, $world.";
}

function out($put) {
  echo $put . PHP_EOL;
}

out('Hello, World.');
hello('World');

?>
