<?php

$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($grades) {
    arsort($grades);
    print_r($grades);
}

sortGradesDescending($grades);
?>
