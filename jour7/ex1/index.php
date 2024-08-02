<?php

function poney ($prenom, $robe, $poids, $taille, $ailes, $herbivore) {
    echo $prenom." est ".$robe." pèse ".$poids." mesure ".$taille." a ".$ailes." et mange ".$herbivore ;
}
poney ("Potriquet", "bleu", "150kg", "1m20", "2 ailes", "de l'eucalyptus") ;
echo "</br>" ;
poney ("Boulibouli", "rouge", "200kg", "90cm", "4 ailes", "de la choucroute") ;
echo "</br>" ;
poney ("Michoko", "vert", "100kg", "1m50", "6 ailes", "de la whey hyperprotéinée") ;

?>