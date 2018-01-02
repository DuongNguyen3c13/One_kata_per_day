<?php

function reverser(string $sentence): string {
  // Your code here
  $splittedString = explode(' ', $sentence);
  for($i = 0; $i < count($splittedString); $i++) {
      $splittedString[$i] = strrev($splittedString[$i]);
      
  }
  return implode(' ', $splittedString);
}

function reverser(string $sentence): string {
  return join(' ',array_map('strrev',explode(' ',$sentence)));
}