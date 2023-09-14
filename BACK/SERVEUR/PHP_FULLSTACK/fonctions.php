<?php

        // Ecrivez une fonction qui permette de générer un lien FINI

// function site($lien, $titre) {
//     $lien = "https://www.reddit.com/";
//     $titre = "Reddit Hug";
//     link($lien, $titre);
//     echo "<a href=".$lien.">".$titre."</a>";
// }

// site($lien, $titre)

        // Ecrivez une fonction qui calcul la somme des valeurs d'un tableau FINI

// $tab = array(4, 3, 8, 2);
// $resultat = array_sum($tab);

// function somme() {
//     global $resultat;
//     $resultat;
//     echo $resultat;
// }

// somme();

        // Créer une fonction qui vérifie le niveau de complexité d'un mot de passe FINI

$resultat = "TopSecret42";

function complex_password() {
    global $resultat;
    $verif = "/^(?=.*?[0-9])(?=.*?[a-z])(?=.*?[A-Z]).{8,}$/";

    if (preg_match($verif, $resultat) == true) {
        echo "mot de passe sûr";
    }
    else {
        echo "mot de passe pas sûr";
    }
}

complex_password();
?>