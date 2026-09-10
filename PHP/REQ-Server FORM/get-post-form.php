<!-- <?php

// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     echo "GET REQUEST";
//     echo "<br>";
//     echo "Name :" . $_GET["name"];
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo "POST REQUEST";
//     echo "<br>";
//     echo "Password :". $_POST["name"];
// }
?> -->


<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "GET REQUEST";
    echo "<br>";
    echo "Name: " . $_GET["name"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST REQUEST";
    echo "<br>";
    echo "Password: " . $_POST["password"];
}

?>