<?php
$cookie_name = "username";
$cookie_value = "aMAN";

// 1. Set the cookie (This MUST be sent before any HTML or output)
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>

<body>
    <?php
    // 2. Check and read the cookie
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
    ?>
</body>

</html>