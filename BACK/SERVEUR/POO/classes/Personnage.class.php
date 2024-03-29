<?php

class Personnage {

    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function getNom() {
        return $this->nom;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom() {
        return $this->prenom;
    }
    
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    public function getSexe() {
        return $this->sexe;
    }
    
    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    public function __toString() {
        return "Nom : {$this->nom}, Prénom : {$this->prenom}, Age : {$this->age}, Sexe : {$this->sexe}";
    }
}

?>