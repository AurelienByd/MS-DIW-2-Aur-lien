<?php

session_start();

    if ( ! isset($_SESSION["login"]) ) 
    {
        header("Location:index.php");
        exit;
    }

    // Reste du code (PHP/HTML)
    echo"Bonjour ".$_SESSION["login"]."<br>";  

?>