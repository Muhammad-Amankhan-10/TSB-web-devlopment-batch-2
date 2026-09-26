
<?php
$cars = ["BMW", "PORSHE", "SUV"]; //INITIALIZING  mein index 2 
$cars[] = "Lamborghini urus";     // INDEX 3 use hoga 
// if i want to append multiple values 
$cars[] = "Ghada gari";

// ANOTHER WAY TO APPEND VALUES 

$var = ["Ahmed", "Asim"];
array_push($var, "Sara");

// READING FROM AN ARRAY 

$new = ["Solar", "sun", "earth"];
echo $new[2];

echo "<br>";

// Changing Value form Array

$nw = ["Solar", "sun", "earth"];
$nw[0] = "vENUS";
print_r($nw);

// CHEKING/Reading LENGTH from ARRAY 

echo "<br>";

$nw = ["Solar", "sun", "earth"];
echo count($nw);

echo "<br>";

$abc = ["Solar ", " sun", " earth"];

// $abc ki jagah count($abc) use karein
for ($i = 0; $i < count($abc); $i++) {
    echo $abc[$i];
}

echo "<br>";


// FUL: PROJECT 

$marks = [500, 450, 400]; //initializing shuruat 

$marks[] =  560;           // Apppending Add karana 
$marks[] =  543;           // Apppending more 

echo count($marks);
echo "<br>";

echo "First STUD marks :" . $marks[0];  // Read


echo "<br>";

foreach ($marks as $mark) {    // LOOP 
    echo "marks : " . $mark;
    echo "<br>";
}
