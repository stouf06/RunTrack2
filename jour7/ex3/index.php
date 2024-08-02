<?php

$nombre_de_coupe = 0 ;
$nombre_de_part = $nombre_de_coupe + 1 ;

function couper_le_gateau ($nombre_de_coupe) {
    if ($nombre_de_coupe > 1) {
        echo "" ; $nombre_de_part = $nombre_de_coupe + 1 ;
    }

    echo " Le nombre de part est ".$nombre_de_part ;
    return $nombre_de_coupe ;

}
couper_le_gateau (2) ;
echo "</br>" ;
couper_le_gateau (3) ;
echo "</br>" ;
couper_le_gateau (4) ;

?>