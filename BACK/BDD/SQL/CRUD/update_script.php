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
    $discID = $_POST["discID"];

    $picturepath = "ASSETS/"; //répertoire où est stockée l'image
    $picture = $_FILES["picture"]["name"]; //avec nom du fichier
    $pictureTempName = $_FILES["picture"]["tmp_name"]; //avec nom temporaire du fichier
    $pictureUploadPath = $picturepath.$picture;

    move_uploaded_file($pictureTempName, $pictureUploadPath); //déplace

    try {
        if (empty($picture) && empty($pictureTempName)) {
            echo "Veuillez sélectionner une image";

        } else {

            // $rqtpictureprep = "UPDATE disc SET disc_picture = :picture WHERE disc_id = :discID";
            // $envoiepic = $db->prepare($rqtpictureprep);
            // $envoiepic->bindParam(":picture", $pictureUploadPath);
            // $envoiepic->execute();
        
    // $artistIDgetprep = "SELECT disc.artist_id FROM artist INNER JOIN disc ON artist.artist_id=disc.artist_id WHERE artist.artist_name = :artistName";
    // $artistIDget = $db->prepare($artistIDgetprep);
    // $artistIDget->bindParam(":artistName", $artistName);
    // $artistIDget->execute();
    // $goartistID = $artistIDget->fetch();
    // $artistID = $goartistID["artist_id"];

    $rqtprep = "UPDATE disc SET disc_title=:title, disc_year=:yearr, disc_label=:labell, disc_genre=:genre, disc_price=:price, artist_id=:artistID, disc_picture = :picture WHERE disc_id=:discID";

    $envoie = $db->prepare($rqtprep);
    $envoie->bindParam(":title", $title, PDO::PARAM_STR);
    $envoie->bindParam(":artistID", $artistName, PDO::PARAM_INT);
    $envoie->bindParam(":yearr", $year, PDO::PARAM_INT);
    $envoie->bindParam(":labell", $label, PDO::PARAM_STR);
    $envoie->bindParam(":genre", $genre, PDO::PARAM_STR);
    $envoie->bindParam(":price", $price, PDO::PARAM_INT);
    $envoie->bindParam(":discID", $discID, PDO::PARAM_INT);
    $envoie->bindParam(":picture", $pictureUploadPath);
    $envoie->execute();
    // ([
    //     'title' => $title,
    //     'artist' => $artistName,
    //     'yearr' => $year,
    //     'genre' => $genre,
    //     'labell' => $label,
    //     'price' => $price
    // ]);

    header("Location: index.php");

    exit();

    }

    } catch (PDOException) {
        echo "Erreur";
    }
}

$db = null;

?>