<?php
//   FOR EACH LOOP

/* foreach ($array as $value) {
               apna code 
        }*/

$students = [" Ali ", " noor ", " zehra "];

foreach ($students as $student) {
    echo $student;
    echo "<br>";
}

$numbers = [10, 30, 50];

foreach ($numbers as $number) {
    echo $number;
    echo "<br>";
}

// IF WITH FOR EACH LOOP 
echo "<br>";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {

    if ($number % 2 == 0) {
        echo $number;
        echo "<br>";
    }
}

// foreach   values one by one uthata ha array se 
// if       check karta ha k value even ha ya nahi 

$student =  [
    "name" => "Aman",
    "class" => "8",
    "city" => "karachi"
];
foreach ($student as $key => $value) {
    echo $key . ":" . $value;
    echo "<br>";
}
