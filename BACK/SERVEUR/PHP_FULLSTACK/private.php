<?php
    session_start();
    if ($_SESSION["auth"]=="ok") {

    }
    else {
        header("Location: login_form.php");
    }
?>