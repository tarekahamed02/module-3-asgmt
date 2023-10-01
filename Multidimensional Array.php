<?php

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 86, 'Science' => 92)
);

function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $numberOfSubjects = count($grades);
        $averageGrade = $totalGrades / $numberOfSubjects;
        
        echo "Student $student's average grade is: $averageGrade\n";
    }
}

calculateAverageGrades($studentGrades);
?>
