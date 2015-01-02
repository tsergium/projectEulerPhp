<?php

/**
 * Project Euler Problem 3
 * 
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */

/*
 * Solution below
 */

$max = 600851475143;
$largest = 0;
for ($i = floor(sqrt($max)) / 2; $i >= 2; $i--) {
  if (!($i % 2)) {
    continue;
  }
  $d = 3;
  $x = sqrt($i);
  while (($i % $d) && $d < $x) {
    $d += 2;
  }
  if (((!($i % $d) && $i != $d) * 1) == 0) {
    if (!($max % $i)) {
      $largest = $i;
      break;
    }
  }
}
echo $largest;