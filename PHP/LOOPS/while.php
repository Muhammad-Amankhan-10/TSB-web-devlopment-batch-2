<?php
// while loop
$number = 6;   //start 

while ($number >= -10) {   // destination 
    echo $number;
    echo "<br>";
    $number--; //post increment 
}

// printing even number

$even = 2;
while ($even <= 30) {
    echo  $even;
    echo "<br>";
    $even += 2;
}


// table 

$table = 1;
while ($table <= 10) {
    echo "5 x " . $table . "=" . (5 * $table);
    echo "<br>";
    $table++;
}

// While with IF 

$abc = 1;
while ($abc <= 10) {
    if ($abc % 2 == 0) {
        echo $abc;
        echo "<br>";
    }
    $abc++;
}


//BREAK 
$i = 1;

while ($i < 6) {
  if ($i == 4) break;  // JIS P BREAK KAR WANA HA USI KA NUM DENA HOGA 
  echo $i;
  echo "<br>";
  $i++;
} 


// CONTINUE 

while ($i < 6) {
  $i++;
  if ($i == 3) continue;  // 3 SKIP HOKR BAKI NUM AJAYEN GY 
  echo $i;
  echo "<br>";

} 
?>