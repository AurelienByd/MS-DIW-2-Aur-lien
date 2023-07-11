<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    // 1. FINI
    
    // $tableau = array(
    //     "Janvier" => 31 . " jours",
    //     "Février" => 28 . " jours",
    //     "Mars" => 31 . " jours",
    //     "Avril" => 30 . " jours",
    //     "Mai" => 31 . " jours",
    //     "Juin" => 30 . " jours",
    //     "Juillet" => 31 . " jours",
    //     "Août" => 31 . " jours",
    //     "Septembre" => 30 . " jours",
    //     "Octobre" => 31 . " jours",
    //     "Novembre" => 30 . " jours",
    //     "Décembre" => 31 . " jours"
    // );
    // arsort($tableau);

    // foreach($tableau as $cle => $valeur)
    // {
    //     echo $cle . " = " . $valeur . "<br>";
    // }
    
    // 2.1 FINI

    // $capitales = array(
    //     "Bucarest" => "Roumanie",
    //     "Bruxelles" => "Belgique",
    //     "Oslo" => "Norvège",
    //     "Ottawa" => "Canada",
    //     "Paris" => "France",
    //     "Port-au-Prince" => "Haïti",
    //     "Port-d'Espagne" => "Trinité-et-Tobago",
    //     "Prague" => "République tchèque",
    //     "Rabat" => "Maroc",
    //     "Riga" => "Lettonie",
    //     "Rome" => "Italie",
    //     "San José" => "Costa Rica",
    //     "Santiago" => "Chili",
    //     "Sofia" => "Bulgarie",
    //     "Alger" => "Algérie",
    //     "Amsterdam" => "Pays-Bas",
    //     "Andorre-la-Vieille" => "Andorre",
    //     "Asuncion" => "Paraguay",
    //     "Athènes" => "Grèce",
    //     "Bagdad" => "Irak",
    //     "Bamako" => "Mali",
    //     "Berlin" => "Allemagne",
    //     "Bogota" => "Colombie",
    //     "Brasilia" => "Brésil",
    //     "Bratislava" => "Slovaquie",
    //     "Varsovie" => "Pologne",
    //     "Budapest" => "Hongrie",
    //     "Le Caire" => "Egypte",
    //     "Canberra" => "Australie",
    //     "Caracas" => "Venezuela",
    //     "Jakarta" => "Indonésie",
    //     "Kiev" => "Ukraine",
    //     "Kigali" => "Rwanda",
    //     "Kingston" => "Jamaïque",
    //     "Lima" => "Pérou",
    //     "Londres" => "Royaume-Uni",
    //     "Madrid" => "Espagne",
    //     "Malé" => "Maldives",
    //     "Mexico" => "Mexique",
    //     "Minsk" => "Biélorussie",
    //     "Moscou" => "Russie",
    //     "Nairobi" => "Kenya",
    //     "New Delhi" => "Inde",
    //     "Stockholm" => "Suède",
    //     "Téhéran" => "Iran",
    //     "Tokyo" => "Japon",
    //     "Tunis" => "Tunisie",
    //     "Copenhague" => "Danemark",
    //     "Dakar" => "Sénégal",
    //     "Damas" => "Syrie",
    //     "Dublin" => "Irlande",
    //     "Erevan" => "Arménie",
    //     "La Havane" => "Cuba",
    //     "Helsinki" => "Finlande",
    //     "Islamabad" => "Pakistan",
    //     "Vienne" => "Autriche",
    //     "Vilnius" => "Lituanie",
    //     "Zagreb" => "Croatie"
    // );
    // ksort($capitales);

    // foreach($capitales as $cle => $valeur)
    // {
    //     echo $cle . " = " . $valeur . "<br>";
    // }

    // 2.2 FINI

    // $capitales = array(
    //     "Bucarest" => "Roumanie",
    //     "Bruxelles" => "Belgique",
    //     "Oslo" => "Norvège",
    //     "Ottawa" => "Canada",
    //     "Paris" => "France",
    //     "Port-au-Prince" => "Haïti",
    //     "Port-d'Espagne" => "Trinité-et-Tobago",
    //     "Prague" => "République tchèque",
    //     "Rabat" => "Maroc",
    //     "Riga" => "Lettonie",
    //     "Rome" => "Italie",
    //     "San José" => "Costa Rica",
    //     "Santiago" => "Chili",
    //     "Sofia" => "Bulgarie",
    //     "Alger" => "Algérie",
    //     "Amsterdam" => "Pays-Bas",
    //     "Andorre-la-Vieille" => "Andorre",
    //     "Asuncion" => "Paraguay",
    //     "Athènes" => "Grèce",
    //     "Bagdad" => "Irak",
    //     "Bamako" => "Mali",
    //     "Berlin" => "Allemagne",
    //     "Bogota" => "Colombie",
    //     "Brasilia" => "Brésil",
    //     "Bratislava" => "Slovaquie",
    //     "Varsovie" => "Pologne",
    //     "Budapest" => "Hongrie",
    //     "Le Caire" => "Egypte",
    //     "Canberra" => "Australie",
    //     "Caracas" => "Venezuela",
    //     "Jakarta" => "Indonésie",
    //     "Kiev" => "Ukraine",
    //     "Kigali" => "Rwanda",
    //     "Kingston" => "Jamaïque",
    //     "Lima" => "Pérou",
    //     "Londres" => "Royaume-Uni",
    //     "Madrid" => "Espagne",
    //     "Malé" => "Maldives",
    //     "Mexico" => "Mexique",
    //     "Minsk" => "Biélorussie",
    //     "Moscou" => "Russie",
    //     "Nairobi" => "Kenya",
    //     "New Delhi" => "Inde",
    //     "Stockholm" => "Suède",
    //     "Téhéran" => "Iran",
    //     "Tokyo" => "Japon",
    //     "Tunis" => "Tunisie",
    //     "Copenhague" => "Danemark",
    //     "Dakar" => "Sénégal",
    //     "Damas" => "Syrie",
    //     "Dublin" => "Irlande",
    //     "Erevan" => "Arménie",
    //     "La Havane" => "Cuba",
    //     "Helsinki" => "Finlande",
    //     "Islamabad" => "Pakistan",
    //     "Vienne" => "Autriche",
    //     "Vilnius" => "Lituanie",
    //     "Zagreb" => "Croatie"
    // );
    // asort($capitales);


    // foreach($capitales as $cle => $valeur)
    // {
    //     echo $valeur . " = " . $cle . "<br>";
    // }

    // 2.3 FINI

    // $capitales = array(
    //     "Bucarest" => "Roumanie",
    //     "Bruxelles" => "Belgique",
    //     "Oslo" => "Norvège",
    //     "Ottawa" => "Canada",
    //     "Paris" => "France",
    //     "Port-au-Prince" => "Haïti",
    //     "Port-d'Espagne" => "Trinité-et-Tobago",
    //     "Prague" => "République tchèque",
    //     "Rabat" => "Maroc",
    //     "Riga" => "Lettonie",
    //     "Rome" => "Italie",
    //     "San José" => "Costa Rica",
    //     "Santiago" => "Chili",
    //     "Sofia" => "Bulgarie",
    //     "Alger" => "Algérie",
    //     "Amsterdam" => "Pays-Bas",
    //     "Andorre-la-Vieille" => "Andorre",
    //     "Asuncion" => "Paraguay",
    //     "Athènes" => "Grèce",
    //     "Bagdad" => "Irak",
    //     "Bamako" => "Mali",
    //     "Berlin" => "Allemagne",
    //     "Bogota" => "Colombie",
    //     "Brasilia" => "Brésil",
    //     "Bratislava" => "Slovaquie",
    //     "Varsovie" => "Pologne",
    //     "Budapest" => "Hongrie",
    //     "Le Caire" => "Egypte",
    //     "Canberra" => "Australie",
    //     "Caracas" => "Venezuela",
    //     "Jakarta" => "Indonésie",
    //     "Kiev" => "Ukraine",
    //     "Kigali" => "Rwanda",
    //     "Kingston" => "Jamaïque",
    //     "Lima" => "Pérou",
    //     "Londres" => "Royaume-Uni",
    //     "Madrid" => "Espagne",
    //     "Malé" => "Maldives",
    //     "Mexico" => "Mexique",
    //     "Minsk" => "Biélorussie",
    //     "Moscou" => "Russie",
    //     "Nairobi" => "Kenya",
    //     "New Delhi" => "Inde",
    //     "Stockholm" => "Suède",
    //     "Téhéran" => "Iran",
    //     "Tokyo" => "Japon",
    //     "Tunis" => "Tunisie",
    //     "Copenhague" => "Danemark",
    //     "Dakar" => "Sénégal",
    //     "Damas" => "Syrie",
    //     "Dublin" => "Irlande",
    //     "Erevan" => "Arménie",
    //     "La Havane" => "Cuba",
    //     "Helsinki" => "Finlande",
    //     "Islamabad" => "Pakistan",
    //     "Vienne" => "Autriche",
    //     "Vilnius" => "Lituanie",
    //     "Zagreb" => "Croatie"
    // );
    // $nbr = sizeof($capitales);

    // echo $nbr . " pays";

    // 2.4

    // $capitales = array(
    //     "Bucarest" => "Roumanie",
    //     "Bruxelles" => "Belgique",
    //     "Oslo" => "Norvège",
    //     "Ottawa" => "Canada",
    //     "Paris" => "France",
    //     "Port-au-Prince" => "Haïti",
    //     "Port-d'Espagne" => "Trinité-et-Tobago",
    //     "Prague" => "République tchèque",
    //     "Rabat" => "Maroc",
    //     "Riga" => "Lettonie",
    //     "Rome" => "Italie",
    //     "San José" => "Costa Rica",
    //     "Santiago" => "Chili",
    //     "Sofia" => "Bulgarie",
    //     "Alger" => "Algérie",
    //     "Amsterdam" => "Pays-Bas",
    //     "Andorre-la-Vieille" => "Andorre",
    //     "Asuncion" => "Paraguay",
    //     "Athènes" => "Grèce",
    //     "Bagdad" => "Irak",
    //     "Bamako" => "Mali",
    //     "Berlin" => "Allemagne",
    //     "Bogota" => "Colombie",
    //     "Brasilia" => "Brésil",
    //     "Bratislava" => "Slovaquie",
    //     "Varsovie" => "Pologne",
    //     "Budapest" => "Hongrie",
    //     "Le Caire" => "Egypte",
    //     "Canberra" => "Australie",
    //     "Caracas" => "Venezuela",
    //     "Jakarta" => "Indonésie",
    //     "Kiev" => "Ukraine",
    //     "Kigali" => "Rwanda",
    //     "Kingston" => "Jamaïque",
    //     "Lima" => "Pérou",
    //     "Londres" => "Royaume-Uni",
    //     "Madrid" => "Espagne",
    //     "Malé" => "Maldives",
    //     "Mexico" => "Mexique",
    //     "Minsk" => "Biélorussie",
    //     "Moscou" => "Russie",
    //     "Nairobi" => "Kenya",
    //     "New Delhi" => "Inde",
    //     "Stockholm" => "Suède",
    //     "Téhéran" => "Iran",
    //     "Tokyo" => "Japon",
    //     "Tunis" => "Tunisie",
    //     "Copenhague" => "Danemark",
    //     "Dakar" => "Sénégal",
    //     "Damas" => "Syrie",
    //     "Dublin" => "Irlande",
    //     "Erevan" => "Arménie",
    //     "La Havane" => "Cuba",
    //     "Helsinki" => "Finlande",
    //     "Islamabad" => "Pakistan",
    //     "Vienne" => "Autriche",
    //     "Vilnius" => "Lituanie",
    //     "Zagreb" => "Croatie"
    // );
    

    // 3.1 FINI

    // $valeur = array();

    // $departements = array(
    //     "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    //     "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    //     "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    //     "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    // );

    // ksort($departements);

    
    
    // foreach ($departements as $cle => $valeur)
    // {
    //     foreach ($valeur as $valeur)
    //     {
    //     echo $cle . " = " . $valeur . "<br>";
    //     }
    // }

    // 3.2


    // $cle;
    // $valeur = array();


    // $departements = array(
    //     "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    //     "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    //     "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    //     "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    // );

    // $nbr = sizeof($cle);

    // foreach ($departements as $cle => $valeur)
    // {
        
    // }

    
    // echo $nbr . "<br>";


?>
</body>
</html>