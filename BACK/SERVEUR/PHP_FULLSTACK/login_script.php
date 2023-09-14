<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST["login"];
    $password =  $_POST["password"];
    if ($login=="admin@admin.com" && $password=="1234") {
        $_SESSION["auth"] = "ok";
        header("Location: accueil.php");
    }
}
else {
    // unset($_SESSION["auth"]);
    header("Location: destroy.php");
    
}

?>

