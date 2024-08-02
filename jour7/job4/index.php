<?php

$a = 0 ;
$b = 0 ;
$operation = "+" ;
$resultat = 0 ;

function calcule ($a, $operation, $b) {
    if ($operation = "+") {
        $resultat = $a + $b ;
    }

    echo "Le résultat est ".$resultat ;
    return $resultat ;
    
}

calcule (2, "+", 3) ;
echo "</br>" ;
calcule (4, "+", 5) ;
echo "</br>" ;
calcule (6, "+", 5) ;

?>