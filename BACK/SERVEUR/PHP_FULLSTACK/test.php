<?php

        // printf et sprintf

// $string1 = "all";
// $string2 = "goodnight";
// $int1 = 1980;
// $format = "To %s a %s %d";

// printf($format."\r", $string1, $string2, $int1);

// $test = sprintf($format, $string1, $string2, $int1);
// echo $test;

        //settype

// $test = "9999";
// settype($test, "int");

// $test += 1;

// echo $test;

        //define

// define("TEST", "SALUT !!!");
// echo TEST;

        //var_dump

// $test =736521485925;
// $test2 = false;
// $test3 = "salut";
// var_dump($test);
// var_dump($test2);
// var_dump($test3);

        //gettype

// echo gettype($test);

        //switch

// $test = 333;
// $message = "gagne";

// switch ($test) {
//     case 3 :
//         echo strtoupper($message." 3");
//     break;

//     case 33 :
//         echo strtoupper($message." 33");
//     break;

//     case 333 :
//         echo strtoupper($message." 333");
//     break;
// }

        //switch with default

$test = 33333;
$message = "gagne";
$message2 = "PERDU";

switch ($test) {
    case 3 :
        echo strtoupper($message." 3");
    break;
        
    case 33 :
        echo strtoupper($message." 33");
    break;
        
    case 333 :
        echo strtoupper($message." 333");
    break;

    default :
    echo strtolower($message2);
}
?>