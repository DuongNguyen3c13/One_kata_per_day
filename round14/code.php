<?php

function digPow($n, $p) {
  $numberArray = [];
  $bigNumber = 0;
  $initializedNumber = $n;
  do {
    array_unshift($numberArray, $n % 10);
    $n = $n / 10;
  }
  while ($n > 1);
  $count = 0;
  do {
    $bigNumber += pow($numberArray[$count], $p);
    $count++;
    $p++;
  }
  while ($count < count($numberArray));
  if (is_int($bigNumber / $initializedNumber)) {
    return $bigNumber / $initializedNumber;
  }
  return -1;
}

// Best practise
function digPow($n, $p) {
    $sum = 0;
    
    foreach(str_split($n) as $number) {
        $sum += $number ** $p++;
    }
      
    return (($sum % $n) == 0) ? 
        ($sum / $n) : -1 ;
}