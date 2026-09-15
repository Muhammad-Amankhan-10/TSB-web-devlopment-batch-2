<?php 
        session_start();
        
        echo "WELCOME KHUSHAMDED ".  strtoupper($_SESSION["username"]);

        echo"<br>";
        echo"<br>";
        
     echo "<a href='logout.php'>LOGOUT</a>";




?>