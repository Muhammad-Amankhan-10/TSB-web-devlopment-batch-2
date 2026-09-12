<?php 
        session_start();

        $_SESSION["username"] = "AHAD";
        echo $_SESSION["username"];
   echo "<br>";

?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set." . $_SESSION["favanimal"];
?>

</body>
</html>