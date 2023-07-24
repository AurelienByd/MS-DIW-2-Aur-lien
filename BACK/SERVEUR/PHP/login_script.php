<?php 

$email = $_REQUEST["email"];
$password = $_REQUEST["password"] = password_hash($password, PASSWORD_DEFAULT);

session_start();

if ($_SESSION["login"] = $email && $_SESSION["password"] = $password) {
    echo "oké";
}

else {
    unset($_SESSION["login"]);
    unset($_SESSION["password"]);
    echo "nope";
}


?>