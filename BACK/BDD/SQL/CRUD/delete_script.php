<?php

// Connexion à la base de données

require 'connex.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $discID = $_POST["discID"];

    try {

    $rqtprep = "DELETE FROM disc WHERE disc_id = :discID";

    $envoie = $db->prepare($rqtprep);
    $envoie->bindParam(":discID", $discID);
    $envoie->execute();

    header("Location: index.php");

    exit();
        
    } catch (PDOException) {
        echo "Erreur";
    }
}

$db = null;

?>