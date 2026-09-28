<?php
// ASSOCIATIVE ARRAY 


$game = [
    "name" => "PUBG",
    "FPS"  => 60,
];
$game["ID"] = "Titan";   // APPENDING 

echo $game["ID"];

// Reaad 
echo "<br>";


$game = [
    "name" => "PUBG",
    "FPS"  => 60,
];

echo $game["name"];

// change in value 
echo "<br>";



$student = [
    "name" => "Ahad",
    "Class"  => 8,
];

$student["Class"] = 9;  // replace from 8

// loop in associative 
echo "<br>";

$student =  [
    "name" => "Aman",
    "class" => "8",
    "city" => "karachi"
];
foreach($student as $key => $value ){
    echo $key . ":" . $value;
    echo "<br>";
}

echo "<br>";

$student =  [
    "name" => "Aman",
    "class" => "8",
    "city" => "karachi"
];
foreach($student as $values ){
    echo  $values;
    echo "<br>";
}
