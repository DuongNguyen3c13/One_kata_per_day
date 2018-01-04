<?php
// Best prectise
function nbYear($p0, $percent, $aug, $p) {
  $count = 0;
  while ($p0 < $p) {
    $p0 *= 1 + $percent / 100;
    $p0 += $aug;
    $count++;
  }
  return $count;
}
// Mine
function nbYear($p0, $percent, $aug, $p, &$year = 1) {
    $p0 = $p0 + $p0 * $percent / 100 + $aug;
    if ($p0 < $p) {
        $year++;
        nbYear($p0, $percent, $aug, $p, $year);
    }
    return $year;
}