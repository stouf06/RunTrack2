<?php

function occurrences($str, $char) {
    $taille = strlen($str);
    $compteur = 0;

    for($i = 0; $i < $taille; $i = $i + 1) { /*$i correspond au nombre d'occurrence*/
        if ($str[$i] == $char) {
            $compteur = $compteur + 1;
        }
    }

    echo "Dans stephane, le nombre d'occurrences est de ".$compteur;
    return $compteur;
}
occurrences("stephane", "e");

?>