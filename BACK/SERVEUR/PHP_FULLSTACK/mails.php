<?php
// test@mailhog.local

$destinataire = "rubis91999@gmail.com";
$objet = "test";
$message = "je teste l'envoie d'un mail avec PHP !";
$headers = array(
    "From" => "aurelien.bayard.pro@hotmail.com",
    "Reply-To" => "aurelien.bayard.pro@hotmail.com"
);

mail($destinataire, $objet, $message, $headers);

if (mail($destinataire, $objet, $message, $headers)) {
    echo "envoyé";
}
else {
    echo "non envoyé";
}

?>