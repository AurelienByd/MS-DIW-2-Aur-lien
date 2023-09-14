<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="auth_table.php" method="post">
        <label for="name">Nom : </label><input type="text" name="name" id="name" require><br>
        <label for="fname">Prénom : </label><input type="text" name="fname" id="fname" require><br>
        <label for="email">Adresse email : </label><input type="email" name="email" id="email" require><br>
        <label for="password">Mot de passe : </label><input type="password" name="password" id="password" require><br>
        <button type="submit">Envoyer</button><button type="reset">Annuler</button>
    </form>
</body>
</html>