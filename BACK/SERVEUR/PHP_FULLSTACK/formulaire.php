<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>
<body>
    <h2>Vos coordonnées :</h2>
    <p><b>* Ces zones sont obligatoires pour envoyer le formulaire.</b></p>
    <form action="monscript.php" method="post" id="formjs16" enctype="multipart/form-data">
        <fieldset>
        <div><label for="societe"><b>Société :</b></label><input type="text" name="societe" id="societe"><p class="p">*</p></div><br>
        <span id="span1"></span><br>
        <div><label for="contacter"><b>Personne à contacter :</b></label><input type="text" name="contacter" id="contacter"><p class="p">*</p></div><br>
        <span id="span2"></span><br>
        <div><label for="adresse"><b>Adresse de l'entreprise :</b></label><textarea name="adresse" id="adresse" cols="30" rows="3"></textarea><p class="p"> </p></div><br>
        <div><label for="codepostal"><b>Code Postal :</b></label><input type="number" name="codepostal" id="codepostal"><p class="p">*</p></div><br>
        <span id="span3"></span><br>
        <div><label for="ville"><b>Ville :</b></label><input type="text" name="ville" id="ville"><p class="p">*</p></div><br>
        <span id="span4"></span><br>
        <div><label for="email"><b>E-mail :</b></label><input type="email" name="email" id="email"><p class="p">*</p></div><br>
        <span id="span5"></span><br>
        <div><label for="telephone"><b>Téléphone :</b></label><input type="number" name="telephone" id="telephone"><p class="p"></p></div><br>
        <div><label for="environnement"><b>Sélectionnez l'environnement technique du projet :</b></label></div><br>
        <div><select name="environnement" id="environnement">
            <option value="" selected>Choisissez</option>
            <option value="access">Access</option>
            <option value="java">Java</option>
            <option value="delphi">Delphi</option>
            <option value="windev">Windev</option>
            <option value="visualbasic">Visual Basic</option>
            <option value="powerbuilder">Power Builder</option>
            <option value="internet">Internet</option>
            <option value="intranet">Intranet</option>
            <option value="windowsnt">Windows NT</option>
            <option value="unix">Unix</option>
            <option value="sqlserver">SQL Server</option>
            <option value="oracle">Oracle</option>
            <option value="autres">Autres...</option>
        </select></div><br><br>
        <input type="file" name="fichier">
        <section><button type="submit" id="submit">Envoyer</button><button type="reset" id="reset">Effacer</button>
        </section>
        </fieldset>
    </form>
    <script src="contact.js"></script>
</body>
</html>