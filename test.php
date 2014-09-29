<?php

function hello($world) {
  echo "Hello, $world.";
}

function out($put) {
  echo $put . PHP_EOL;
}

out('Hello, World.');
hello('World');

?>
