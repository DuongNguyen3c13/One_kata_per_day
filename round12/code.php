<?php

function comp($a1, $a2) {
  if (is_null($a1) || is_null($a2) || count($a1) !== count($a2)) {
    return false;
  }
  $small = [];
  $big = [];
  sort($a1);
  sort($a2);
  
  if (array_sum($a1) <= array_sum($a2)) {
    $small = $a1;
    $big = $a2;
  } else {
    $small = $a2;
    $big = $a1;
  }
  
  for ($i = 0; $i < count($small); $i++) {
    if (sqrt($big[$i]) != $small[$i]) {
      return false;
    }
  }
  return true;