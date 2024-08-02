<?php

function pourcentage_d_alcool ($quantite_alcool, $quantite_totale) {
    $volume_alcool = ($quantite_alcool / $quantite_totale)*100 ;

    return floor ($volume_alcool) ;/*(floor) fonction pour arrondir au +bas
                                    (ceil) fonction pour arrondir au +haut 
                                    (round) fonction pour arrondir par défaut */
}
$boisson1 = pourcentage_d_alcool (35, 75) ;
echo "Le whiskey a un volume d'alcool de ".$boisson1." %" ;
echo "</br>" ;
$boisson2 = pourcentage_d_alcool (55, 100) ;
echo "Le Rhum a un volume d'alcool de ".$boisson2." %" ;
echo "</br>" ;
$boisson3 = pourcentage_d_alcool (30, 150) ;
echo "Le Champagne a un volume d'alcool de ".$boisson3." %" ;

?>