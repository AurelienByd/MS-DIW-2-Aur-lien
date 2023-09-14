<?php
        // 1 FINI

        // $impair = 0;

        // while ($impair <= 150) {
        //     if ($impair%2 != 0) {
        //         echo $impair."\n";
        //     }
        //     $impair++;
        // }

        // 2 FINI

        // $boucle = 1;
        // $string = "Je dois faire des sauvegardes régulières de mes fichiers";

        // while ($boucle <= 500) {
        //     echo $boucle." ".$string."\n";
        //     $boucle++;
        // }

        // 3 FINI

        echo "<table>";
        for($colonne = 1; $colonne < 10; $colonne++) {
            echo "<tr>";
            for($ligne = 1; $ligne < 10; $ligne++) {
                $calcul = $colonne*$ligne;
                echo "<td>".$calcul."</td>";
            }
            "</tr>";
        }
        echo "</table>";
?>