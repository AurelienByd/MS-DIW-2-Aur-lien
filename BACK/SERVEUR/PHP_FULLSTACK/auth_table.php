<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["name"];
    $prenom = $_POST["fname"];
    $email = $_POST["email"];
    $mdp = password_hash($_POST["password"], PASSWORD_DEFAULT);
}

if (password_verify($_POST["password"], $mdp) == true) {

$info = fopen("auth_table.php", "a");

$user = array (
    "Nom" => $nom,
    "Prénom" => $prenom,
    "Adresse email" => $email,
    "Mot de passe" => $mdp
);

fputs($info, ""."\n");
$nom = fputs($info, "Nom : ".$nom.", ");
$prenom = fputs ($info, "Prénom : ".$prenom.", ");
$email = fputs($info, "Adresse email : ".$email.", ");
$mdp = fputs($info, "Mot de passe : ".$mdp);

fclose($info);

}

print_r($user);

?>
Nom : Bayard, Prénom : Aurélien, Adresse email : admin@admin.com, Mot de passe : $2y$10$mRGqaWG/LWklLdsmWNzHXeUihtcMRgEQvAkzCuov8m4dYS1ihglMW
Nom : Titi, Prénom : Tata, Adresse email : titi@tata.com, Mot de passe : $2y$10$j/wSO1JuD9UJS4XFYFGhK.YtwnJKdRCCqsqQrVwL/CDBIGHYVdpIa
Nom : lul, Prénom : lol, Adresse email : lul@lol.com, Mot de passe : $2y$10$ZsxFHBpqc6FdId47/XP96u9fgWZ3rD1wCh3FmN5817AQSGo2iCqZe