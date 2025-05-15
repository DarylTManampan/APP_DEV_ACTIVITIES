<?php 
//Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'.
echo '<h3> Average Grade </h3>';

$average = 0;
$sum = 0;

$students = [
    ['name' => 'John', 'grades' => [85, 90, 92, 88]],
    ['name' => 'Jane', 'grades' => [95, 88, 91, 87]],
    ['name' => 'Joe', 'grades' => [75, 82, 79, 88]],
];

foreach ($students as $student) {
    $sum = array_sum($student['grades']);
    $average = $sum / count($student['grades']);

    echo $student['name'] . ': Average Grade = '. " $average ";
    echo '<br>';
}

