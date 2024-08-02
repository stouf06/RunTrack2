<?php

$score= $_GET ["score"] ;
    if ($score >= 10) {
        echo "victoire" ;
    }
    if ($score < 10) { 
        echo "defaite" ;
    }
        echo "/fin" ;

?>
