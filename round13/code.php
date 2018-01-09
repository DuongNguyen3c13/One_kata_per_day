<?php
function remove(string $s): string {
  // Coding and coding ... 
  var_dump($s);
  str_replace("world","Peter","Hello world!");
  str_replace("!", "asd", $s);
  var_dump($s);die;
  return "!";
}