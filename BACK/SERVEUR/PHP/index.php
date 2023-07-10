<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // 1.
    
    // for ($z = 0; $z <= 150; $z++) { 
    // if ($z % 2 != 0) {
    //     echo $z . " ";
    // }
    // } 

    // 2.

    // $compte = 1;
    // $phrase = "Je dois faire des sauvegardes régulières de mes fichiers";

    // while ($compte <= 500) {
    //     echo $compte . " " . $phrase . " ";
    //     $compte++;
    // }

    // 3.

    // $tabmulti = [
    //     [
    //         "l0" => 0,
    //         "l1" => 1,
    //         "l2" => 2,
    //         "l3" => 3,
    //         "l4" => 4,
    //         "l5" => 5,
    //         "l6" => 6,
    //         "l7" => 7,
    //         "l8" => 8,
    //         "l9" => 9,
    //     ],

    // ];

    // foreach($tabmulti as $table) {
    //     echo $table['l0'] . $table['l1']; 
    // }

    $nbrligne = 0;
    $nbrcolon = 0;
    $nbrcase = 0;
    $table = array();

    while ($nbrligne <= 9 and $nbrcolon <= 9)
    {
        $table [$nbrligne][$nbrcolon] = $nbrcase;
        $nbrligne++;
        $nbrcolon++;
        $nbrcase++;
    }

    

    echo $table[0][0] . $table[0][1] . $table[0][2] . $table[0][3] . $table[0][4] . $table[0][5] . $table[0][6] . $table[0][7] . $table[0][8] . $table[0][9];
    echo $table[1][0] . $table[1][1] . $table[1][2] . $table[1][3] . $table[1][4] . $table[1][5] . $table[1][6] . $table[1][7] . $table[1][8] . $table[1][9];
    echo $table[2][0] . $table[2][1] . $table[2][2] . $table[2][3] . $table[2][4] . $table[2][5] . $table[2][6] . $table[2][7] . $table[2][8] . $table[2][9];
    echo $table[3][0] . $table[3][1] . $table[3][2] . $table[3][3] . $table[3][4] . $table[3][5] . $table[3][6] . $table[3][7] . $table[3][8] . $table[3][9];
    echo $table[4][0] . $table[4][1] . $table[4][2] . $table[4][3] . $table[4][4] . $table[4][5] . $table[4][6] . $table[4][7] . $table[4][8] . $table[4][9];
    echo $table[5][0] . $table[5][1] . $table[5][2] . $table[5][3] . $table[5][4] . $table[5][5] . $table[5][6] . $table[5][7] . $table[5][8] . $table[5][9];
    echo $table[6][0] . $table[6][1] . $table[6][2] . $table[6][3] . $table[6][4] . $table[6][5] . $table[6][6] . $table[6][7] . $table[6][8] . $table[6][9];
    echo $table[7][0] . $table[7][1] . $table[7][2] . $table[7][3] . $table[7][4] . $table[7][5] . $table[7][6] . $table[7][7] . $table[7][8] . $table[7][9];
    echo $table[8][0] . $table[8][1] . $table[8][2] . $table[8][3] . $table[8][4] . $table[8][5] . $table[8][6] . $table[8][7] . $table[8][8] . $table[8][9];
    echo $table[9][0] . $table[9][1] . $table[9][2] . $table[9][3] . $table[9][4] . $table[9][5] . $table[9][6] . $table[9][7] . $table[9][8] . $table[9][9];
    ?>
</body>
</html>