<?php
$largeur = 20 ; $hauteur = 10 ;
$ligne = 0 ; $colonne = 0 ;

    while ($ligne < 19) {
        echo "_" ; $ligne = $ligne + 1 ;
    }
    echo "<br/>" ; $ligne = 0 ; 
    while ($colonne < 9) {
        while ($ligne < 20) {
            if ($ligne == 0||$ligne == 19) {
                echo "|" ; $ligne = $ligne + 1 ;
            }
            else {
                echo "&nbsp"."&nbsp" ; $ligne = $ligne + 1 ;
            }
        }
    echo "<br/>" ; $ligne = 0 ; $colonne = $colonne + 1 ;   
    }

    while ($ligne < 20) {
        if ($ligne == 0||$ligne == 19) {
            echo "|" ; $ligne = $ligne + 1 ;
        }
        else {
            echo "_" ; $ligne = $ligne + 1 ;
        }
    }
?>