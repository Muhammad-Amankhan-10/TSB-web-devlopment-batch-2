<?php 
       // setcookie("username","MEEEE", time() +3600 ,"/");
       setcookie("test_cookie", "testing_value", time() + 60, "/");

       
?>

<?php 
 // echo $_COOKIE["username"];

  echo $_COOKIE["test_cookie"];


?>