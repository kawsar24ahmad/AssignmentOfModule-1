<?php


$number = (int) readline('Enter a number for sum: ');

function sumOfDigits($number)  {
    if ($number<0) {
        $number *= -1;
     }
     $numberStr = (string) $number;
     $sum = $numberStr[0];
    
     for ($i = 1; $i < strlen($numberStr) ; $i++) { 
        $sum += $numberStr[$i];
     }
     return $sum;
}
echo sumOfDigits($number);















?>