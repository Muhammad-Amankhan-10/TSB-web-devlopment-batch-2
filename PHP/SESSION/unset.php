<?php

session_start();

$_SESSION["username"] = "AHAD";
$_SESSION["class"] = 9;

unset($_SESSION["username"]);


echo $_SESSION["class"];
?>