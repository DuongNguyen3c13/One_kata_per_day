<?php

function balance(string $l, string $r): string {
  // Coding and coding ...
  $left = substr_count($l, "!") * 2 + substr_count($l, "?") * 3;
  $right = substr_count($r, "!") * 2 + substr_count($r, "?") * 3;
  if ($left === $right) {
    return 'Balance';
  }
  return $left > $right ? 'Left' : 'Right'; 
}


function balance(string $l, string $r): string {
  $questionMarksLeft = substr_count($l, '?') * 3;
  $questionMarksRight = substr_count($r, '?') * 3;

  
  $exclamationMarksLeft = substr_count($l, '!') * 2;
  $exclamationMarksRight = substr_count($r, '!') * 2;
  
  $left = $questionMarksLeft + $exclamationMarksLeft;
  $right = $questionMarksRight + $exclamationMarksRight;
  
  $values = [
    -1 => 'Right',
    0 => 'Balance',
    1 => 'Left'
  ];
  
  return $values[$left <=> $right];
  
}