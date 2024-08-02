<?php

$infractions = array (62, 58, 67, 61, 78) ;
$somme = 0 ;

for ($i = 0 ; $i < count ($infractions) ; $i = $i + 1) {
    $somme = $somme + $infractions [$i] ;

}
    $moyenne = $somme / count ($infractions) ;
    echo $moyenne ;

    if ($moyenne > 50) {
        echo "<br/>Amende" ;
    }
    else {  
        echo "<br/>Félicitations" ;
    }   

?>