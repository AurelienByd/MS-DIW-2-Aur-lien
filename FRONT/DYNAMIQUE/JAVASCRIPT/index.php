<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="entrform.css">
    <title>Document</title>
</head>
<body>
    <form action="lol.php" method="post" id="formentrainement">
        <fieldset>
            <legend>Formulaire :</legend>
            <label for="name">Nom :</label><input type="text" name="name" id="name"><br>
            <span class="error"></span><br>
            <label for="firstname">Prénom :</label><input type="text" name="firstname" id="firstname"><br>
            <span class="error"></span><br>
            <label for="email">Email :</label><input type="email" name="email" id="email"><br>
            <span class="error"></span><br>
            <label for="telephone">Téléphone :</label><input type="number" name="telephone" id="telephone"><br>
            <span class="error"></span><br>
            <label for="couleur">Couleur :</label><br>
            <input type="radio" name="couleur" value="red" id="couleur" class="couleur">Rouge
            <input type="radio" name="couleur" value="yellow" class="couleur">Jaune
            <input type="radio" name="couleur" value="blue" class="couleur">Bleu<br>
            <span class="error"></span><br>
            <button type="submit">Envoyer</button><button type="reset">Annuler</button>
        </fieldset>
    </form>
    <script src="entrform.js"></script>
</body>
</html>