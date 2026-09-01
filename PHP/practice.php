<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
</head>
<body>
    <h1>Welcome to php world!</h1>
    <?php
     echo "<br> this is written in php";
     echo "<br>";
     $hello_1 =20;
     $hello_2 = 30;
     $hello_3 = $hello_1 + $hello_2;
     echo"Addition of  " . $hello_1 . " and " . $hello_2 . " is : " . $hello_3;
     echo "<br>";

     function local_variable() {
        $hi = 40;
        echo "local variable is : " . $hi;
     }
     local_variable();
     echo "<br>";

     function positivity($peace) {
        echo "welcome to php world " . $peace;
     }
     positivity("ahad");
     echo "<br>";


    ?>
    
</body>
</html>