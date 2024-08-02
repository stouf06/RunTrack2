<?php
$n = 0 ;

    while ($n != 100) {
        $n = $n + 1 ;
             if ($n == 42) {
            echo "La Plateforme_"."<br/>" ;
            }
            if ($n <= 20) {
            echo "<i>".$n."</i><br/>" ;
            }
            elseif ($n > 20 && $n < 25) {
                echo $n."<br/>" ; 
            }
            elseif ($n >= 25 && $n <= 50) {
                echo "<u>".$n."</u><br/>" ;
            }
        else {
            echo $n."<br/>" ;
        }
    }

echo "Fin"
?> 