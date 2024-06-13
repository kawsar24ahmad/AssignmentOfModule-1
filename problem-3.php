<?php

$givenString = readline('Give A Sentence: ');
if (strlen($givenString)<= 0) {
    echo 'not String found!';
    return;
}

function str_to_rev(string $str = "I Love Programming")  {
    $arr_of_word = explode(" ", $str);
    $result = "";
    foreach ($arr_of_word as $word) {
       $reversed = "";
        for ($i = strlen($word)-1; $i >= 0  ; $i--) { 
            $reversed .= $word[$i];
        }
        $result .= $reversed . ' ';
       
    }
    return $result;
}
echo str_to_rev($givenString);





?>