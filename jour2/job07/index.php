<?php
$hauteur = 5 ; $largeur = 10 ;
$ligne = 0 ;

while ($hauteur == 5) {
    while ($ligne <= 10 ) {
            if ($ligne == 5) {
            echo "/" ; $ligne = $ligne + 1 ;
            }
            elseif ($ligne == 6) {
            echo "\\" ; $ligne = $ligne + 1 ; 
            }
            else {
            echo "&nbsp"."&nbsp" ; $ligne = $ligne + 1 ;
            }
    }
    echo "<br/>" ; $ligne = 0 ; $hauteur = $hauteur + 1 ;
    while ($ligne <= 10) {
            if ($ligne == 4) {
            echo "/" ; $ligne = $ligne + 1 ;
            }
            elseif ($ligne == 7) {
            echo "\\" ; $ligne = $ligne + 1 ;
            }
            else {
            echo "&nbsp"."&nbsp" ; $ligne = $ligne + 1 ;
        }
    }
    echo "<br/>" ; $ligne = 0 ; $hauteur = $hauteur + 1 ;
    while ($ligne <= 10) {
            if ($ligne == 3) {
            echo "/" ; $ligne = $ligne + 1 ;
            }
            elseif ($ligne == 8) {
            echo "\\" ; $ligne = $ligne + 1 ;
            }
            else {
            echo "&nbsp"."&nbsp" ; $ligne = $ligne + 1 ;
            }
    }
    echo "<br/>" ; $ligne = 0 ; $hauteur = $hauteur + 1 ;
    while ($ligne <= 10) {
            if ($ligne == 2) {
            echo "/" ; $ligne = $ligne + 1 ;
            }
            elseif ($ligne == 9) {
            echo "\\" ; $ligne = $ligne + 1 ;
            }
            else {
            echo "&nbsp"."&nbsp" ; $ligne = $ligne + 1 ;
        }
    } 
    echo "<br/>" ; $ligne = 0 ; $hauteur = $hauteur + 1 ;
      while ($ligne <= 10) {
        if ($ligne == 1) {
            echo "/" ; $ligne = $ligne + 1 ;
        }
        elseif ($ligne == 10) {
            echo "\\" ; $ligne = $ligne + 1 ;
        }
        else {
            echo "&nbsp"."&nbsp" ; $ligne = $ligne + 1 ;
        }
    }
    echo "<br/>" ; $ligne = 0 ; $hauteur = $hauteur = 1 ;

    
}

?>