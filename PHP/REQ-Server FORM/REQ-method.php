<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "Name: ". $_GET["name"];
             echo "<br>";
            echo "password " . $_POST["password"];
} 



?>