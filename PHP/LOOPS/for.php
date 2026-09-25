<?php
// FOR LOOP 

/*  for (initialization; condition; increment) {
           code to be executed
}   */

// counting to 5            

for ($abc = 1; $abc <= 5; $abc++) {
    echo $abc;
    echo "<br>";
}

// backword  
echo "<br>";


for ($abc = 5; $abc >= 1; $abc--) {
    echo $abc;
    echo "<br>";
}

// EVEN NUM
echo "<br>";


for ($abc = 2; $abc <= 20; $abc += 2) {
    echo $abc;
    echo "<br>";
}

// Table 
echo "<br>";

for ($abc = 1; $abc <= 10; $abc++) {
    echo "5 x " . $abc . "=" . (2 * $abc) . " Nachoo ";

    echo "<br>";
}


// for break 
echo "<br>";


for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "<br>";
    echo "The number is: $x <br>";
}
echo "<br>";
/* Loop ke bahar kya hua: Jab aap loop se bahar aaye,
                     toh $x ke andar aakhri value 3
                     hi store thi. Isliye jab aapne loop ke bahar 
                     teen dafa echo "The number is: $x <br>"; 
                     likha, toh usne teenon baar 3 print kiya.*/
echo "The number is: $x <br>";
echo "The number is: $x <br>";
echo "The number is: $x <br>";

$student = ["aman", "ayan", "safi"];

for ($i = 0; $i < 3; $i++) {
    echo $student[$i];
    echo "<br>";
}
