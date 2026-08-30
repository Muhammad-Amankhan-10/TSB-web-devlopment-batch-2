<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables In PHP</title>
</head>

<body>
    <h1>Variables In PHP</h1>
    <?php

    $name = "ALi";
    echo strlen($name);  // it will count the length of string
    echo "<br>";

    echo strtoupper($name); // it will convert into upper case
    echo "<br>";

    echo strtolower($name); // it will convert into lower case
    echo "<br>";


    // FUNCTIONS IN PHP

    function welcome()
    {
        echo "Welcome to PHP World";
    }
    welcome();  // calling the function

    echo "<br>";
    echo "<br>";

    //  WITH PARAMETERS

    function moyemoye($name)  // function with parameter
    {
        echo "Welcome to PHP World " . $name;
    }
    moyemoye("Alice");  // calling the function with a parameter

    echo "<br>";

    // varaible change hoty hain waqt k sath new declaration k sath

    $name = "aman";
    echo $name;

    echo "<br>";

    $name = "khan";
    echo $name;

    echo "<br>";

    // TYPE STRENGTH 

    $value = 10;  // integer

    echo $value;

    echo "<br>";

    $value = "string";

    echo $value;

    //   VARIABLE SCOPE 

    // local variable // global variable // static variable

    echo "<br>";
    // LOCAL VARIABLE
    function local_variable()
    {
        $local_variable = "I am a local variable";
        echo $local_variable;
    }

    local_variable();

    echo "<br>";

    // GLOBAL VARIABLE

    $name = "Aaman";
    function global_variable()
    {
        global $name; // global var ko access k liye global keyword use hota hai
        echo $name;
    }
  //  global_variable(); // calling the function

    ?>



</body>

</html>