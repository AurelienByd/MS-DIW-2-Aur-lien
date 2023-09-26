<?php

// Connexion à la base de données

require 'connex.php';

$rqtprep = "SELECT * FROM disc INNER JOIN artist ON disc.artist_id = artist.artist_id ORDER BY disc.disc_title ASC";
// $rqt = $db->query($rqtprep);
$rqt = $db->prepare($rqtprep);
$rqt->execute();
$disc = $rqt->fetchAll();

// $rqt2 = $db->query("SELECT COUNT(disc_id) AS nombre FROM disc");
$rqt2 = $db->prepare("SELECT COUNT(disc_id) AS nombre FROM disc");
$rqt2->execute();
$disc2 = $rqt2->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
<header id="header">
    <h1>Liste des disques (<?= $disc2["nombre"]  ?>)</h1>
    <a href="add_form.php" id="button_ajouter">Ajouter</a>
</header>
<section id="section_1">

    <?php foreach($disc as $row): ?>

    <section id="section_2">
        <div>
            <img src="<?= $row["disc_picture"] ?>" alt="image de la pochette" id="image">
        </div>
        <div id="divsection_1">
            <div id="sousdiv1">
            <h4 class="infotext"><?= $row["disc_title"] ?></h4>
            <p class="infotext"><b><?= $row["artist_name"] ?></b></p>
            <p class="infotext"><b>Label : </b><?= $row["disc_label"] ?></p>
            <p class="infotext"><b>Year : </b><?= $row["disc_year"] ?></p>
            <p class="infotext"><b>Genre : </b><?= $row["disc_genre"] ?></p>
            </div>
        <div id="sousdiv2">
            <a href="details.php?disc_id=<?= $row["disc_id"] ?>" class="button_details">Détails</a>
        </div>
        </div>
    </section>

    <?php endforeach; ?>

</section>
<?= $db = null ?>
    <script src="script.js"></script>
</body>
</html>