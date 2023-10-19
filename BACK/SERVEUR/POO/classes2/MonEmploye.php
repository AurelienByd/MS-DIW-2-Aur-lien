<?php

require_once 'Employe.class.php';

// $p = new Employe("Choux", "Pierra", "2015-09-01", "Vendeur", "10K", "Vente");

$p = new Employe();

$p->setNom("Choux");
$p->setPrenom("Pierra");
$p->setdateEmbauche("2015-09-01");
$p->setposteEntreprise("Vendeur");
$p->setsalaire("10K");
$p->setserviceEmploye("Vente");

// on stocke la fonction dans une variable pour pouvoir l'afficher
$de = $p->anneesEmb("2015-09-01");

echo ($p); echo($de);

?>