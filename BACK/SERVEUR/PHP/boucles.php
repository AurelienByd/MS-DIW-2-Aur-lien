<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // 1. FINI
    
    // for ($z = 0; $z <= 150; $z++) { 
    // if ($z % 2 != 0) {
    //     echo $z . " ";
    // }
    // } 

    // 2. FINI

    // $compte = 1;
    // $phrase = "Je dois faire des sauvegardes régulières de mes fichiers";

    // while ($compte <= 500) {
    //     echo $compte . " " . $phrase . " ";
    //     $compte++;
    // }

    // 3. FINI

    echo "<table>";
    $ligne = 10;
    $colonne = 10;
    $value;
    //$tablemulti = array();

    for($nbrcolonne = 1; $nbrcolonne < $colonne; $nbrcolonne++)
    {
        //$tablemulti[$nbrcolonne] = $value;
        echo "<tr>";
        for($nbrligne = 1; $nbrligne < $ligne; $nbrligne++)
        {
            $value = $nbrligne*$nbrcolonne;
            //$tablemulti[$nbrligne][$nbrcolonne] = $value;
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    ?>
</body>
</html>