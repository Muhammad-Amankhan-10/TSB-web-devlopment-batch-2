<?php 
    
    session_start();

    session_unset();

    session_destroy();

    header("location: login.php"); //yahan browser user ko dubara login me 
                                    // bhej deta ha 

    echo"logout succesfully";






?>