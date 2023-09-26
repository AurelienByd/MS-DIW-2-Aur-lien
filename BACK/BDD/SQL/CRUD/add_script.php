<?php

// Connexion à la base de données

require 'connex.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $year = $_POST["year"];
    $label = $_POST["label"];
    $genre = $_POST["genre"];
    $price = $_POST["price"];
    $artistName = $_POST["artist"];

    $picturepath = "ASSETS/"; //répertoire où est stockée l'image
    $picture = $_FILES["picture"]["name"]; //avec nom du fichier
    $pictureTempName = $_FILES["picture"]["tmp_name"]; //avec nom temporaire du fichier
    $pictureUploadPath = $picturepath.$picture;

    move_uploaded_file($pictureTempName, $pictureUploadPath); //déplace

    try {
        if (empty($artistName)) {
            echo "Veuillez sélectionner un artiste";
        } else {

            // $rqtGetArtistIDprep = "SELECT artist.artist_id FROM artist INNER JOIN disc ON artist.artist_id=disc.artist_id WHERE artist_name = :artistName";
            // $rqtGetArtistID = $db->prepare($rqtGetArtistIDprep);
            // $rqtGetArtistID->bindParam(":artistName", $artistName);
            // $rqtGetArtistID->execute();
            // $rowArtistID = $rqtGetArtistID->fetch(PDO::FETCH_ASSOC);
            // $artistID = $rowArtistID["artist_id"];

    $rqtprep = "INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) VALUES (:title, :yearr, :picture, :labell, :genre, :price, :artistID)";

    $envoie = $db->prepare($rqtprep);
    $envoie->bindParam(":title", $title);
    $envoie->bindParam(":artistID", $artistName);
    $envoie->bindParam(":yearr", $year);
    $envoie->bindParam(":labell", $label);
    $envoie->bindParam(":genre", $genre);
    $envoie->bindParam(":price", $price);
    $envoie->bindParam(":picture", $pictureUploadPath);
    $envoie->execute();

    header("Location: index.php");

    exit();

        }
    } catch (PDOException) {
        echo "Erreur";
    }
}

$db = null;

?>