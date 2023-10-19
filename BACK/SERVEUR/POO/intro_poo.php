<?php

// On va créer une classe Categorie qui, dans le projet The District, représente une catégorie de plats

class Categorie {
    public $id;
    public $nom;
    public $description;

    public function __construct($id, $nom, $description)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function afficher() {
        echo $this->id . " " . $this->nom . " : " . $this->description;
    }

// La méthode magique __toString() est appelée automatiquement quand on tente de traiter un objet 
// en tant que chaîne de caractères (à l'aide de la structure echo par exemple). 
// Dans ce cas, cette méthode retourne la chaîne de caractères de notre choix.
// La fonction __toString sur la classe Categorie va retourner l'id et le nom de la catégorie

    public function __toString(){
        return $this->id . " - " .$this->nom;
    }

    // la classe Categorie a trois propriétés publiques ($id,$nom et $description) et deux méthodes publiques (le constructeur
    // __construct et la méthode afficher()). Le constructeur permet d'initialiser les propriétés de la classe lorsqu'une instance est créée. La méthode
    // afficher permet d'afficher les propriétés de la classe.

}

// Créons maintenant la classe Plat, qui sera associée à une catégorie:

class Plat {
    public $id;
    public $nom;
    public $description;
    public $prix;
    public $categorie;

    public function __construct($id, $nom, $description, $prix, $categorie) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->categorie = $categorie;
    }

    public function afficher() {
        echo $this->id . " " . $this->nom . " : " . $this->description . " (" . $this->prix . "€) " . $this->categorie;

      // *Attention: $this->categorie ne fonctionnera pas si sur la classe Categorie il n'y a pas de fonction 
      // magique __toString() qui nous permet de traiter un objet comme chaîne de caractères! 
      // Dans ce cas, vous devez ou la rajouter ou alors appeler un ou plusieurs attributs de la classe 
      // Categorie.  
      // Par ex: $this->categorie->nom (si la propriété nom est declarée comme publique) ou 
      // $this->categorie->getNom() (si la propriété est déclarée comme privée, mais qu'elle a un getter 
      // (c'est-à-dire une fonction publique getNom()))
    }

    // la classe Plat a cinq propriétés publiques ($id, $nom, $description, $prix et $categorie) et deux méthodes publiques (le
    // constructeur __construct et la méthode afficher()). La propriété $categorie est une instance de la classe Categorie qui représente la catégorie
    // à laquelle le plat est associé.

}

// La création d'une classe enfant permet d'hériter des propriétés et des comportements d'une classe parent.
// On va donc créer une classe PlatSpecial qui serait un enfant de la classe Plat :

class PlatSpecial extends Plat {
    public $specialite;

    public function __construct($id, $nom, $description, $prix, $categorie, $specialite) {
        parent::__construct($id, $nom, $description, $prix, $categorie);
        $this->specialite = $specialite;
    }

    public function afficher() {
        echo $this->nom . " : " . $this->description . " (" . $this->prix . "€)";
        echo " Spécialité : " . $this->specialite;
    }

    // Dans cet exemple, la classe PlatSpecial hérite de la classe Plat. On a ajouté en plus une propriété publique ($specialite) et une
    // méthode publique (le constructeur __construct et la méthode afficher). La méthode afficher() surcharge la méthode afficher() de la classe Plat
    // pour y ajouter l'affichage de la spécialité du plat.

}

// Vous pouvez créer une instance d'une classe n'importe où dans votre code, à condition que la classe soit accessible dans l'espace de noms de votre fichier PHP.
// Par exemple, si vous avez une classe "Plat" dans un fichier "Plat.php" dans votre projet, vous pouvez créer une instance de cette classe dans un autre fichier 
// PHP en incluant le fichier "Plat.php" et en créant une instance de la classe comme suit :

// Inclusion des fichiers Plat.php, Categorie.php, PlatSpecial.php
require_once('Categorie.php');
require_once('Plat.php');
require_once('PlatSpecial.php');

// Création d'une instance de la classe Categorie
$categoriePizza = new Categorie(1, "Pizzas", "Les meilleures pizzas du monde !");

// Création d'une instance de la classe Plat
$platMargherita = new Plat(1, "Margherita", "Tomate, mozzarella, basilic", 9.50, $categoriePizza);

// Création d'une instance de la classe PlatSpecial
$calzone = new PlatSpecial(1, "Calzone", "Tomate, mozzarella, jambon, champignons", 12.50, $categoriePizza, "Spécialité du chef");

// Affichage des propriétés des objets
$categoriePizza->afficher() ;
echo "\n";

// Affiche "1 Pizzas : Les meilleures pizzas du monde !"
$platMargherita->afficher();
echo "\n";
// Affiche "1 Margherita : Tomate, mozzarella, basilic (9.5€) 1 - Pizzas"
$calzone->afficher();
echo "\n";
// Affiche "1 Calzone : Tomate, mozzarella, jambon, champignons" (12.5€) Spécialité de chef

// Dans le code ci-dessus, nous avons inclus les fichiers "Plat.php", "Categorie.php" et "PlatSpecial.php" avec la fonction "require_once" et 
// créé une instance de la classe Categorie pour les pizzas, une instance de la classe Plat pour la margherita, une instance de la classe PlatSpecial
// pour le calzone. On affiche ensuite les propriétés de ces objets en appelant la méthode afficher de chaque objet.

// L'agrégation

$calzone->afficher(); // Affiche le plat
$calzone->categorie->afficher(); // Affiche la catégorie du plat

// Encapsulation / Getter / Setter

// Pour protéger les détails de l'implémentation d'une classe, certaines propriétés peuvent être déclarées en private ou protected. De ce fait ces propriétés
// ne sont plus accessibles directement. Pour autoriser l'accès, nous créons une méthode get qui permet de lire et set qui permet de modifier.

// class Categorie {
//     public $id;
//     private $nom;
//     public $description;

//     public function __construct($id=0, $nom="", $description="") {
//         $this->id = $id;
//         $this->nom = $nom;
//         $this->description = $description;
//     }

//     public getNom() {
//         return $this->nom;
//     }

//     public setNom($nom) {
//         $this->nom = $nom;
//         return $this;
//     }

//     public function afficher() {
//         echo $this->nom . " : " . $this->description;
//     }
// }

// $cat = new Categorie(2, "Pasta", "Toutes les pates...");

// echo $cat->nom; // NE FONCTIONNE PAS, LA PROPRIETE EST PRIVATE

// echo $cat->getNom();

// $cat->setNom("Pâtes");

// Dans cet exemple, nous déclarons l'attribut nom en private. Pour pouvoir y accéder, nous avons créé une méthode getNom pour la 
// lecture et une méthode setNom pour l'écriture. La seule façon d'utiliser la propriété nom est d'utiliser les accesseurs getNom et setNom.

// Les méthodes fetch et fetchAll de PDO sont capables de créer des instances de vos classes à partir d'une requête d'extraction.

// $db = new PDO(...);

// $request = $db->query("select * from categorie");
// $categories = $request->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categorie");

// foreach ($categories as $categorie) {
//     $categorie->afficher();

// }

// Avec le mode PDO::FETCH_CLASS, la méthode fetchAll va reconstituer des objets de la classe Categorie à partir du résultat de la 
// requête. La vavriable $categories contient donc une liste d'objets de type Categorie. Notez que dans le constructeur de la classe Categorie, les
// propriétés sont initialisées avec des valeurs par défaut. PDO::FETCH_PROPS_LATE appelle le constructeur de la classe avant d'assigner aux
// propriétés de l'objet les valeurs retrouvées dans les colonnes de la table.

foreach ($categories as $categorie) {
    $categorie->afficher();
}

?>