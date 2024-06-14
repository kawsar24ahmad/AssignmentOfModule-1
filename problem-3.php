<?php

function readInputText()  {
    echo "Enter a text:\n";
    $text = trim(fgets(STDIN));
    while(empty($text)) {
        echo "There is not found any text! Enter a text:\n";
        $text = trim(fgets(STDIN));
    }
    return $text;
}



function str_to_rev(string $str)  {
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
$text = readInputText();
echo str_to_rev($text);





?>