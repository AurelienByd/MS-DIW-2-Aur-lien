<?php

// Connexion à la base de données

require 'connex.php';

$rqtprep = "SELECT * FROM artist ORDER BY artist_name ASC";
$rqt = $db->prepare($rqtprep);
$rqt->execute();
$artist = $rqt->fetchAll();

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
    
<form action="add_script.php" method="post" id="form_ajout_vinyles" enctype="multipart/form-data">
<fieldset>
    <legend><h2>Ajouter un vinyle</h2></legend>

    <label for="title" class="label_form_ajout_vinyles">Title</label><input type="text" name="title" placeholder="Enter title" id="vinyle_title" class="input_form_ajout_vinyles">
    <label for="artist" class="label_form_ajout_vinyles">Artist</label><select name="artist" id="vinyle_artist" class="input_form_ajout_vinyles">
        <option value="">Select artist</option>
        <?php foreach ($artist as $row): ?>

        <option value="<?= $row["artist_id"] ?>"><?= $row["artist_name"] ?></option>

        <?php endforeach; ?>
    </select>
    <label for="year" class="label_form_ajout_vinyles">Year</label><input type="number" name="year" placeholder="Enter year" id="vinyle_year" class="input_form_ajout_vinyles">
    <label for="genre" class="label_form_ajout_vinyles">Genre</label><input type="text" name="genre" placeholder="Enter genre (Rock, Pop, Prog ...)" id="vinyle_genre" class="input_form_ajout_vinyles">
    <label for="label" class="label_form_ajout_vinyles">Label</label><input type="text" name="label" placeholder="Enter label (EMI, Warner, PolyGram, Univer sale ...)" id="vinyle_label" class="input_form_ajout_vinyles">
    <label for="price" class="label_form_ajout_vinyles">Price</label><input type="number" name="price" id="vinyle_price" class="input_form_ajout_vinyles">
    <label for="picture" class="label_form_ajout_vinyles">Picture</label><input type="file" name="picture" id="vinyle_picture" class="input_form_ajout_vinyles">
    <div id="divbtn_form_add">
        <button type="submit" class="btn_form_add">Ajouter</button><button type="button" id="button_retour" class="btn_form_add">Retour</button>
    </div>
</fieldset>
</form>
<?= $db = null ?>
    <script src="script.js"></script>
</body>
</html>