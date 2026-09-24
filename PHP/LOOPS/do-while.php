<?php
// Do-While Loop 

$i = 19;    //start 

do {
    echo $i;            // code to be executed
    echo "<br>";
    $i++;
} while ($i < 6);       // Condition 



// inverse counting 
echo "<br>";

$a = 5;
do {
    echo $a;
    echo "<br>";
    $a--;
} while ($a >= 1);

// even numbers 
echo "<br>";

$b = 2;
do {
    echo $b;
    echo "<br>";
    $b += 2;           // even 
} while ($b <= 10);     // kaha tak print karwane hain 

// starting me agar false 
echo "<br>";

$var = 10;
do {
    //  echo "heelo ";
    echo $var;
    $var++;
    echo "<br>";
} while ($var < 15);



// wrong code for ensure about INFINITE LOOP 

/* $c = 1;

do {
    echo $c;
    $c++;          // THis is the main thing 
} while ($c <= 5); */


