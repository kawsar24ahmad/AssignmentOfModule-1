<?php

function readInput() {
    echo "Enter a list of integers:\n";
    $input = trim(fgets(STDIN));

    while (empty($input)) {
        echo "input cannot be empty.Please Enter a list of integers:\n";
        $input = trim(fgets(STDIN));
    }
    return $input;
}
function validatyCheck($input)  {
    $numbers = explode(' ', $input);
    $validNumbers = [];
    foreach ($numbers as  $num) {
        if (is_numeric($num)) {
           $validNumbers[] = (int) $num;
        }else{
            echo "this is unvalid input.please Enter a valid integer list:\n";
            $input = trim(fgets(STDIN));
            return validatyCheck($input);
        }
    }
    return $validNumbers;
    // var_dump($validNumbers);
}
function minimumOfAbsoluteNum($numbers){
    $min = $numbers[0];
    foreach ($numbers as $num) {
        if ($num < 0) {
            $num *= -1;
        }
        if ($num == 0) {
            $num *= 0;
        }
        
        if ($num < $min ) {
            $min = $num;
        }
    }
    return $min;
}                                                         

$input = readInput();
$numbers = validatyCheck($input);
// var_dump($numbers);
$result = minimumOfAbsoluteNum($numbers);
echo "Minimum Absolute Number is $result.";