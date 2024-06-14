<?php

function readInputNumber() {
    echo "Enter a number of pyramid length:\n";
    $length =  trim(fgets(STDIN));
    while (empty($length)|(!is_numeric($length))|$length <= 0) {
        echo "You must give a valid number of pyramid length:\n";
        $length = trim(fgets(STDIN));
    }
    
    return $length;
}

function pyramidOfStar( $length) {
    
    for ($i=1; $i <= $length; $i++) { 
        $star = "*";

        echo str_pad(str_repeat($star, $i++), $length, ' ', STR_PAD_BOTH) . "\n";
        
    }
    
}
$length = readInputNumber();
pyramidOfStar($length);
