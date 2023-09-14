<?php 

        // Trouvez le numéro de semaine de la date suivante : 14/07/2019 FINI

        // $date = "14-07-2019";
        // $convert = strtotime($date);
        // echo date("W", $convert);

        // Combien reste-t-il de jours avant la fin de votre formation FINI

        $date1 = date_create("2023-09-07");
        $date2 = date_create("2023-10-13");
        $diff = date_diff($date1, $date2);

        echo $diff->format("%R%a days");

        // Comment déterminer si une année est bissextile ? FINI

        // $year = 1949;

        // if ($year % 4 != 0 || $year % 100 == 0 && $year % 400 != 0) {
        //         echo "l'année n'est pas bissextile";
        // }
        // else if ($year % 4 == 0) {
        //         echo "l'année est bissextile";
        // }

        // Montrez que la date du 32/17/2019 est erronée FINI

        // $format =  DateTime::createFromFormat("d/m/Y H:i:s", "32/17/2019 00:00:00");

        // $errors = DateTime::getLastErrors();

        // if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
        //         echo "erronée";
        // }
        // else {
        //         echo "bon";
        // }

        // Affichez l'heure courante sous cette forme : 11h25 FINI

        // $secrecup = time();
        // $inhours = "H";
        // $inminutes = "i";
        // $converthours = date($inhours, $secrecup);
        // $convertminutes = date($inminutes, $secrecup);
        // echo $converthours."h".$convertminutes;

        // Ajoutez 1 mois à la date courante FINI

        // $currentdate = time();
        // $onemonthlaterdate = "07-10-2023";
        // $convert = strtotime($onemonthlaterdate);
        // $calcul = $convert - $currentdate;
        // $date = date("d-M-Y", $currentdate + $calcul);

        // echo $date;

        // Que s'est-il passé le 1000200000 FINI

        // $searchdate = 1000200000;
        // $format = "M-d-Y";
        // $convert = date($format, $searchdate);

        // echo $convert." : attentats";
?>