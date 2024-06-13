<?php

$length = (int) readline('Enter a length number: ');
var_dump($length);
function pyramidOfStar(int $length) {
    if ($length <= 0) {
        echo 'Enter a positive number';
        return;
    }
    for ($i=1; $i <= $length; $i++) { 
        $star = "*";

        echo str_pad(str_repeat($star, $i++), $length, ' ', STR_PAD_BOTH) . "\n";
        
    }
    
}
 pyramidOfStar($length);
