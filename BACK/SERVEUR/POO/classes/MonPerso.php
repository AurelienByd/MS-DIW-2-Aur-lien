<?php

require_once 'Personnage.class.php';

$p = new Personnage();

$p->setNom("Man");
$p->setPrenom("Super");
$p->setAge(20);
$p->setSexe("M");

echo ($p);

?>