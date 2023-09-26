<?php

$servername = "localhost";
$databasename = "the_district";
$username = "admin";
$password = "Afpa1234";

try {
    $db = new PDO("mysql:host=$servername;dbname=$databasename", "$username", "$password");
    // mode erreur PDO
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données". "<br>"."<br>";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}

// $stmt = $db->query("SELECT * FROM plat");

// while ($row = $stmt->fetch()) {
//     echo $row['libelle'] . "<br>";
// }

// $id_categorie = 10;
// $stmt = $db->prepare("SELECT * FROM plat WHERE id_categorie = :id_categorie");
// $stmt->bindValue(':id_categorie', $id_categorie);
// $stmt->execute();

// while ($row = $stmt->fetch()) {
//     echo $row['libelle'] . "<br>";
// }

// $stmt = $db->prepare("SELECT * FROM commande WHERE  quantite > :qty");
// $qty = 2; //c'est une donnée de type 'int' (entier)
// $stmt->bindParam(':qty', $qty, PDO::PARAM_INT);
// $stmt->execute();

// while ($row = $stmt->fetch()) {
//     echo $row['nom_client'] . "<br>";
// }

// $stmt = $db->prepare("SELECT * FROM plat WHERE libelle = :libelle");
// $libelle = 'Pizza Bianca'; // donnée de type string (chaîne de caractères)
// $stmt->bindParam(':libelle', $libelle, PDO::PARAM_STR);
// $stmt->execute();

// while ($row = $stmt->fetch()) {
//     echo $row['libelle']. "<br>";
// }

$stmt = $db->query("SELECT * FROM plat");
$results = $stmt->fetchAll();

foreach ($results as $row) {
    echo $row['libelle'] . " - " . $row['prix'] . "<br>";
}

?>