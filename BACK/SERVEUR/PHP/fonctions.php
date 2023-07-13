<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //fonction qui permet de générer un lien FINI

        // function lien($lien, $titre)
        // {
        //     $lien = "https://www.reddit.com/";
        //     $titre = "Reddit Hug";
        //     echo "<a href=".$lien.">".$titre."</a>";
        // }

        // lien($lien, $titre);

        //fonction qui calcul la somme des valeurs d'un tableau FINI

        // function somme($resultat)
        // {
            
        //     $tab = array(4, 3, 8, 2);
        //     $resultat = array_sum($tab);
        //     echo $resultat;
        // }

        // somme($resultat);


        //fonction qui vérifie le niveau de complexité d'un mot de passe FINI

        function password($resultat)
        {
            $PATTERN = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";
            $resultat = "TopSecret42";

            if(preg_match($PATTERN, $resultat) == true)
            {
                echo "<p>"."mot de passe complexe"."</p>";
            }
            else if(preg_match($PATTERN, $resultat) == false)
            {
                echo "<p>"."mot de passe simple"."</p>";
            }
        }

        password($resultat)

    ?>
</body>
</html>