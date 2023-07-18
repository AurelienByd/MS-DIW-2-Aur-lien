<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Lecture d'un fichier FINI
    
    // print_r(file("https://ncode.amorce.org/ressources/Pool/NEW_MS_FULL_STACK/WEB_PHP/liens.txt"));

    //Récupération d'un fichier distant

// echo "<table>";
    $tableau = file("https://ncode.amorce.org/customers.csv");
echo "<thead>";
echo "<tr>";
echo "<th>"."Surname"."</th>";
echo "<th>"."Firstname"."</th>";
echo "<th>"."Email"."</th>";
echo "<th>"."Phone"."</th>";
echo "<th>"."City"."</th>";
echo "<th>"."State"."</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
$trie = preg_split(",", $tableau);
echo "<td>".$trie."</td>";
echo "<td>".$trie."</td>";
echo "<td>".$trie."</td>";
echo "<td>".$trie."</td>";
echo "<td>".$trie."</td>";
echo "<td>".$trie."</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

$tableau = print_r(file("https://ncode.amorce.org/customers.csv"));

















// $oSecondes = time();
// $format = "Y-m-d-H-i-s";
// $date = date($format, $oSecondes);


// $myVar = "Bonjour le monde";

// // // Ouverture en écriture seule 
// $fp = fopen("$date.txt", "a"); 

// // // Ecriture du contenu ($myVar) 
// fputs($fp, $myVar); 

// // // Fermeture du fichier  
// fclose($fp); 
    ?>
</body>
</html>