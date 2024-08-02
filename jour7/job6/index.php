<?php

function leetSpeak ($str) {
    $taille = strlen ($str) ;
    $compteur = 0 ;/*$i = "lettre" ;*/

    for($i = 0; $i < $taille; $i = $i + 1) { /*if ($str[$i] == $int) ;*/
        if ($str[$i] == "a") {
            
            $str[$i] = "4" ; 
        }
        elseif ($str[$i] == "b") {
            
            $str[$i] = "8" ; 
        }
        elseif ($str[$i] == "e") {
            
            $str[$i] = "3" ;
        }
        elseif ($str[$i] == "g" ||$str[$i] == "G") {
            
            $str[$i] = "6" ;
        }
        elseif ($str[$i]  == "l" || $str[$i] == "L") {
            
            $str[$i] = "1" ;
        }
        elseif ($str[$i] == "s" || $str[$i] == "S") {
            
            $str[$i] = "5" ;
        }
        elseif ($str[$i] == "t") {
            
            $str[$i] = "7" ;
        }
    }
    return $str ;
}

$texteModifie = leetSpeak ("Hello LaPlateforme! Salut les Gabians!") ;
echo "Le résultat est : ". $texteModifie ;

?>