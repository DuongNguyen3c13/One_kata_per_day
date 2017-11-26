<?php

function countPositivesSumNegatives($input) : array {
    $countOfPositiveNumbers = 0;
    $sumOfNegativeNumbers = 0;

    for ($i = 0; $i < count($input); $i++) {
        if (count($input) > 0 && $input[$i] > 0) {
            $countOfPositiveNumbers++;
        } elseif (count($input) > 0 && $input[$i] < 0) {
            $sumOfNegativeNumbers = $sumOfNegativeNumbers + $input[$i];
        }
    }
    if($countOfPositiveNumbers === 0 && $sumOfNegativeNumbers === 0) {
      return [];
    }
    return [$countOfPositiveNumbers, $sumOfNegativeNumbers];
}

function countPositivesSumNegatives($input) {
    if (empty($input)) {
      return [];
    }
    
    $pos = $neg = 0;
    foreach ($input as $value) {
      if ($value > 0) {
        $pos += 1;
      } else {
        $neg += $value;
      }
    }
    
    return [$pos, $neg];
}