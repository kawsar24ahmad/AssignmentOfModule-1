<?php

function readInputNumber() {
   echo "Enter a number for sum:\n";
   $number =  trim(fgets(STDIN));
   while (empty($number)|(!is_numeric($number))|$number <= 0) {
       echo "You must give a valid number for sum:\n";
       $number = trim(fgets(STDIN));
   }
   return $number;
}

function sumOfDigits($number)  {
    
     $numberStr = (string) $number;

     $sum = $numberStr[0];
    
     for ($i = 1; $i < strlen($numberStr) ; $i++) { 
        $sum += $numberStr[$i];
     }
     return $sum;
}
$number = readInputNumber();
echo sumOfDigits($number);














?>