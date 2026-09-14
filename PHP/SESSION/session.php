<?php
session_start();

$_SESSION["username"] = "AHAD";
$_SESSION["class"] = 9;
$_SESSION["city"] = "khi";
echo $_SESSION["username"];
echo "<br>";
echo $_SESSION["class"];
echo "<br>";
echo $_SESSION["city"];
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