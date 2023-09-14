<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $recup = fopen("recup.txt", "w");

    fputs($recup, $_POST['societe']."\n");
    fputs($recup, $_POST['contacter']."\n");
    fputs($recup, $_POST['adresse']."\n");
    fputs($recup, $_POST['codepostal']."\n");
    fputs($recup, $_POST['ville']."\n");
    fputs($recup, $_POST['email']."\n");
    fputs($recup, $_POST['telephone']."\n");
    fputs($recup, $_POST['environnement']."\n");

    fclose($recup);
}

?>