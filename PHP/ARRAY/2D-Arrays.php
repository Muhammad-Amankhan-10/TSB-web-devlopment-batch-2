<?php
// TWO DIMENTIONAL ARRAYS

$student = [
    ["ALi", "8", "karachi"],
    ["Amann", "12", "Turkey"],
    ["NOOR", "12", "defence phase 8"],
];

echo $student[2][2];  // feching


// LOOPING IN 2-D ARRAYS

foreach ($student as $students) {
    foreach ($students as $value) {
        echo "<br>";
        echo $value;
    }
}
