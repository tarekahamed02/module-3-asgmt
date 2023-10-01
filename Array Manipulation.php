<?php

$numbers = range(1, 10);

function removeEvenNumbers($numbers) {
    $result = array();
    
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }
    
    print_r($result);
}

removeEvenNumbers($numbers);
?>
