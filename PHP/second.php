<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPerator and datatype</title>
</head>

<body>

    <?php

    $var1 = 10;  // integer
    $var2 = 10;
    $var3 = $var1 + $var2;
    echo "Addition of " . $var1 . " And " . $var2 . " is : ";
    echo $var3;

    $var1 = "zero";  // now its convert into string 

    $var1 = 33.45; //Now its converts into Float 

    $var1 = 0;  // again convert 

    echo "<br>";

    // Integer 
    $a = 12;
    echo "The Value is : " . $a;
    echo "<br>";
    // Float
    $b = 12.90;
    echo "The Value is : " . $b;
    echo "<br>";
    // string
    $c = "AHAD";
    echo "the name is " . $c;
    echo "<br>";
    // booloean 
    $is_truelogged_in = true;  // The user is logged in
    $has_discount = false; // The user does not get a discount
    // Array 
    $array = array('khi', 'pesh');  // collection of data set 
    print_r($array);
    echo "<br>";
    // Null 
    $u = null;  // empty value
    echo "The Value is : " . $u;
    echo "<br>";
    // Object 
   

    ?>

</body>

</html>