<?php

class Magasin {

    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    public function getcodePostal() {
        return $this->codePostal;
    }

    public function setcodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    public function getville() {
        return $this->codePostal;
    }

    public function setville($ville) {
        $this->ville = $ville;
        return $this;
    }
    
}

class Employe {

    private $nom;
    private $prenom;
    private $dateEmbauche; // Date d'embauche dans l'entreprise
    private $posteEntreprise; // Fonction (Poste) dans l'entreprise
    private $salaire; // Salaire en K euros brut annuel
    private $serviceEmploye; // Service dans lequel se situe l'employé (Comptabilité, Commercial...)

    // public function __construct($nom, $prenom, $dateEmbauche, $posteEntreprise, $salaire, $serviceEmploye) {
    //     $this->nom = $nom;
    //     $this->prenom = $prenom;
    //     $this->dateEmbauche = $dateEmbauche;
    //     $this->posteEntreprise = $posteEntreprise;
    //     $this->salaire = $salaire;
    //     $this->serviceEmploye = $serviceEmploye;
    // }

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

    public function getdateEmbauche() {
        return $this->dateEmbauche;
    }
    
    public function setdateEmbauche($dateEmbauche) {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    public function getposteEntreprise() {
        return $this->posteEntreprise;
    }
    
    public function setposteEntreprise($posteEntreprise) {
        $this->posteEntreprise = $posteEntreprise;
        return $this;
    }

    public function getsalaire() {
        return $this->salaire;
    }
    
    public function setsalaire($salaire) {
        $this->salaire = $salaire;
        return $this;
    }

    public function getserviceEmploye() {
        return $this->serviceEmploye;
    }
    
    public function setserviceEmploye($serviceEmploye) {
        $this->serviceEmploye = $serviceEmploye;
        return $this;
    }

    public function anneesEmb($dateEmbauche)
    {
        $dateEmbauche = date_create("2015-09-01");
        $dateNow = date_create(date("Y-m-d", time()));
        $diff = date_diff($dateEmbauche, $dateNow)->format("%Y");

        return "Temps dans l'entreprise : $diff années";

    }

    public function __toString()
    {
        return "Nom : {$this->nom} "."Prenom : {$this->prenom} "."Date d'embauche dans l'entreprise : {$this->dateEmbauche} "."Fonction (Poste) dans l'entreprise : {$this->posteEntreprise} "."Salaire en K euros brut annuel : {$this->salaire} "."Service dans lequel se situe l'employé : {$this->serviceEmploye} ";
    }

}

?>