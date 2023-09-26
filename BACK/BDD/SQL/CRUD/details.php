<?php

// Connexion à la base de données

require 'connex.php';

$rqtprep = "SELECT * FROM disc INNER JOIN artist ON disc.artist_id=artist.artist_id WHERE disc_id=?";
$rqt = $db->prepare($rqtprep);
$rqt->execute(array($_GET["disc_id"]));
$disc = $rqt->fetch(PDO::FETCH_OBJ);

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
    <h2>Details</h2>
    <section>
        <div id="colonnes_details">
            <div class="div_details">
                <label for="title" class="label_details_vinyles">Title</label><input name="title" id="vinyle_title" class="input_details_vinyles" value="<?= $disc->disc_title ?>" disabled>
                <label for="year" class="label_details_vinyles">Year</label><input name="year" id="vinyle_year" class="input_details_vinyles" value="<?= $disc->disc_year ?>" disabled>
                <label for="label" class="label_details_vinyles">Label</label><input name="label" id="vinyle_label" class="input_details_vinyles" value="<?= $disc->disc_label ?>" disabled>
            </div>
            <div class="div_details">
                <label for="artist" class="label_details_vinyles">Artist</label><input name="artist" id="vinyle_artist" class="input_details_vinyles" value="<?= $disc->artist_name ?>" disabled>
                <label for="genre" class="label_details_vinyles">Genre</label><input name="genre" id="vinyle_genre" class="input_details_vinyles" value="<?= $disc->disc_genre ?>" disabled>
                <label for="price" class="label_details_vinyles">Price</label><input name="price" id="vinyle_price" class="input_details_vinyles" value="<?= $disc->disc_price ?>" disabled>
            </div>
        </div>
    <div id="div_details_img">
        <label for="picture">Picture</label><img src="<?= $disc->disc_picture ?>" alt="pochette du disque" name="picture" class="vinyle_details_picture">
    </div>
    <div id="div_btn_details">
        <a href="update_form.php?disc_id=<?= $disc->disc_id ?>" class="button_modifier">Modifier</a>
        <a href="delete_form.php?disc_id=<?= $disc->disc_id ?>" class="button_modifier">Supprimer</a>
        <button type="button" id="button_retour" class="button_modifier">Retour</button>
    </div>
    </section>
<?= $db = null ?>
    <script src="script.js"></script>
</body>
</html>