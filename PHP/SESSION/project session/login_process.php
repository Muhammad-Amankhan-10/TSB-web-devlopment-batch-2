<?php 
     session_start();

     $username = $_POST["username"]; // save in post

     $_SESSION["username"] = $username; // save in session 

     echo"login successfull";
     echo"<br>";
     echo "<a href='dashboard.php'>GO ON DASHBOARD</a>    ";

?>