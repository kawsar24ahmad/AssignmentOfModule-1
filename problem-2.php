<?php

$filename = "text.txt";


if (!file_exists($filename)) {
    die("file not found!");
}else {
    $file = fopen($filename, 'r');

    if ($file) {
        $str = file_get_contents($filename);
        if ($str == "") {
            echo 'There is no word in the file!';
            return;
        }
        $wordsOfFile =  explode(" ", $str);
        $totalWordsOfFile = 0;
        for ($i=0; $i <= count($wordsOfFile) ; $i++) { 
             $totalWordsOfFile = $i;
        }
        echo 'total words of the file : '. $totalWordsOfFile;
        fclose($file);
    }else{
        echo "Failed to open $filename";
    }
}


?>