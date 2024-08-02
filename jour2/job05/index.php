<?php
$n = 0 ;
$p = 1 ;
    while ($n <= 1000) {
        if ($n < 10) {
            if ($p == 2||$p == 3||$p == 5||$p == 7) {
            echo "est un nombre premier".$p."<br/>" ;
            $p = $p + 1 ;
            }
            else {
            echo "n'est pas un nombre premier"."<br/>" ;
            }
        }
        if ($n %2 == 0||$n %3 == 0||$n %5 == 0||$n %7 == 0) {
            echo "n'est pas un nombre premier".$n."<br/>" ;
            $n = $n + 1 ;
        }
        else { 
            echo "est un nombre premier".$n."<br/>" ;
            $n = $n + 1 ;
        }
    }   
echo "Fin"  
?>