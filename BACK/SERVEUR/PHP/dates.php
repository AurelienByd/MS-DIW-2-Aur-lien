<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Trouvez le numéro de semaine de la date suivante : 14/07/2019 FINI

    // $oDate = "2019-07-14";
    // echo "Semaine " . date('W',strtotime($oDate)) . ' du ' . $oDate;

    //Combien reste-t-il de jours avant la fin de votre formation FINI

    // $oDateNow = time();
    // $oDateAfter = strtotime("2023-07-28 17:00:00");

    // function diff($oDateNow, $oDateAfter)
    // {
    //     $oDateEcart = abs($oDateAfter-$oDateNow);
    //     $retour = array();

    //     $time = $oDateEcart;
    //     $retour['second'] = $time % 60;

    //     $time = floor( ($time - $retour['second']) /60 );
    //     $retour['minute'] = $time % 60;

    //     $time = floor( ($time - $retour['minute'])/60 );
    //     $retour['hour'] = $time % 24;

    //     $time = floor( ($time - $retour['hour'])  /24 );
    //     $retour['day'] = $time;

    //     return $retour;

    // }

    // print_r(diff($oDateNow, $oDateAfter));

    //Comment déterminer si une année est bissextile ? FINI
    
    // $oSecondes = time();
    // $oSecondes = 2109410215;
    // $format = "Y";
    // $oDate = date($format, $oSecondes);

    // if ($oDate%4 == 0 && $oDate%100 != 0 || $oDate%400 == 0)
    // {
    //     echo $oDate."<p>"."Année bissextile"."</p>";
    // }
    // else
    // {
    //     echo $oDate."<p>"."Année non bissextile"."</p>";
    // }

    //Montrez que la date du 32/17/2019 est erronée FINI

    // $oDate =  DateTime::createFromFormat("d/m/Y", "32/17/2019");

    // $errors = DateTime::getLastErrors();

    // if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    //     echo "erronée";
    // }

    //Affichez l'heure courante sous cette forme : 11h25 FINI

    // $oSecondes = time();
    // $formatH = "H";
    // $formati = "i";
    // $hnow = date($formatH, $oSecondes);
    // $inow = date($formati, $oSecondes);

    // echo $hnow."<span>"."h"."</span>".$inow;

    //Ajoutez 1 mois à la date courante FINI

    // $oSecondes = time();
    // $secondtomonth = 60*60*24*31;
    // $format = "d-m-Y";
    // $currentdate = date($format, $oSecondes+$secondtomonth);

    // echo "<p>".$currentdate."</p>";

    //Que s'est-il passé le 1000200000 FINI

    // $event = 1000200000;
    // $format = "d-M-Y";
    // $convert = date($format, $event);

    // echo "<p>".$convert."</p>";
    // echo "<p>"."Attentats aux Etats-Unis à New-York"."</p>";
    ?>
</body>
</html>