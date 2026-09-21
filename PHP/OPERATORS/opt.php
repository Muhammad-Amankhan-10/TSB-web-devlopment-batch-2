<?php
$a = 10;
$b = "10";

var_dump($a == $b);

echo "<br>";

var_dump($a === $b);


echo "<br>";

$x = 10;  
echo ++$x;

$x = 10;  
echo $x++;

echo "<br>";
$x = 10;  
echo --$x;
echo "<br>";

$age = 102;

if ($age >= 99 && $age <= 101) {
    echo "Hello budhy !";
}
else {
    echo "ap nahi a saktay chahcha ";
}

$day = "Sunday";

if ($day == "Sunday" || $day == "MONDAY") {
    echo "CHAL SCHOOOL OYEE";
}
?>