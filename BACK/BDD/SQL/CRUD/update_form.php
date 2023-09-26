<?php

// Connexion à la base de données

require 'connex.php';

$rqtprep = "SELECT * FROM disc INNER JOIN artist ON disc.artist_id=artist.artist_id WHERE disc_id=?";
$rqt = $db->prepare($rqtprep);
$rqt->execute(array($_GET["disc_id"]));
$disc = $rqt->fetch(PDO::FETCH_OBJ);

$rqtprep2 = "SELECT * FROM artist ORDER BY artist_name ASC";
$rqt2 = $db->prepare($rqtprep2);
$rqt2->execute();
$artist = $rqt2->fetchAll();

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

    <form action="update_script.php?disc_id=<?= $disc->disc_id ?>" method="post" id="form_update_vinyles" enctype="multipart/form-data">
        <fieldset>
            <legend><h2>Modifier un vinyle</h2></legend>
            <label for="title" class="label_update_vinyles">Title</label><input type="text" name="title" id="vinyle_title" class="input_update_vinyles" value="<?= $disc->disc_title ?>">
            <label for="artist" class="label_update_vinyles">Artist</label><select name="artist" id="vinyle_artist" class="input_update_vinyles">
                <option value="<?= $disc->artist_id ?>" selected><?= $disc->artist_name ?></option>
                <?php foreach ($artist as $row): ?>

                <option value="<?= $row["artist_id"] ?>"><?= $row["artist_name"] ?></option>

                <?php endforeach; ?>
                </select>
                <label for="year" class="label_update_vinyles">Year</label><input type="number" name="year" id="vinyle_year" class="input_update_vinyles" value="<?= $disc->disc_year ?>">
                <label for="genre" class="label_update_vinyles">Genre</label><input type="text" name="genre" id="vinyle_genre" class="input_update_vinyles" value="<?= $disc->disc_genre ?>">
                <label for="label" class="label_update_vinyles">Label</label><input type="text" name="label" id="vinyle_label" class="input_update_vinyles" value="<?= $disc->disc_label ?>">
                <label for="price" class="label_update_vinyles">Price</label><input type="number" name="price" id="vinyle_price" class="input_update_vinyles" value="<?= $disc->disc_price ?>">
                <label for="picture" class="label_update_vinyles">Picture</label><input type="file" name="picture" id="vinyle_picture" class="input_update_vinyles">
                <input type="hidden" name="discID" value="<?= $disc->disc_id ?>">
                <img src="<?= $disc->disc_picture ?>" alt="pochette du disque" name="picture" class="update_picture">
                <div class="label_update_vinyles">
                    <button type="submit" class="button_modifier">Modifier</button>
                    <button type="button" id="button_retour" class="button_modifier">Retour</button>
                </div>
        </fieldset>
    </form>
    <?= $db = null ?>
    <script src="script.js"></script>
</body>
</html>