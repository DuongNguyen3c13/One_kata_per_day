<?php

//Best practise
function persistence(int $num): int {
  $count = 0;
  while ($num > 9) {
    $num = array_product(str_split($num));
    $count++;
  }
  
  return $count;
}

// Mine 
function persistence(int $num): int {
  $persistence = 0;
  $array = str_split((string)$num);
  while(count($array) > 1) {
    $num = 1;
    foreach ($array as $element) {
      $num = $num * $element;
    }
    $array = str_split((string)$num); 
    $persistence++;
  }
  return $persistence;
}

// Not tested yet
function persistence(int $num): int {
  var_dump($num);
  $array = str_split((string)$num);
  static $persistence = 0;
  if(count($array) > 1) {
    $persistence++;
    $num = 1;
    foreach ($array as $element) {
      $num = $num * $element;
    }
    persistence($num);
    return $persistence;
  }
  return 0;
}