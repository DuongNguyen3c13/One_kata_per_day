<?php 

const NUMBER_OF_DECIMAL_DIGITS = 2;

function roundUpNumber(float $number) : float
{
    return round($number, NUMBER_OF_DECIMAL_DIGITS);
}
$roundedUpNumber = roundUpNumber(1.3333);
echo $roundedUpNumber;

?>