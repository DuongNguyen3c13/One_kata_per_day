<?php

function pre_fizz($n) {
  // Your code here
  $preFizz = [];
  for ($i = 1; $i <= $n; $i++) {
    array_push($preFizz, $i);
  }
  return $preFizz;
}


function pre_fizz(int $n): array {
  return range(1, $n);
}