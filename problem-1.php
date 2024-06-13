<?php


$listOfIntegers =  readline('Enter a list of integers: ');


if ($listOfIntegers == "") {
    echo 'there is not found any integer' . "\n";
    $listOfIntegers = readline('Enter a list of integers: ');
   
}


if (!preg_match('/\s/', $listOfIntegers)) {
    if (!is_numeric($listOfIntegers)) {
        echo "The input is not a valid number.";
        return;
    }
    if ($listOfIntegers < 0) {
        $listOfIntegers *= -1;
    }
}


$array = explode(' ', $listOfIntegers);

    function minimumOfAbsoluteNum( array $array) {
        $min = $array[0];
        foreach ($array as $num) {
            if (!is_numeric($num)) {
                echo 'This is not valid number List!' . "\n";
                
                 return;
            }
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
        return 'Minimum Absolute Number: ' .   (int) $min;
    
    }
    

    


 echo minimumOfAbsoluteNum($array);

?>