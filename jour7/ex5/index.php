<?php

$listeIngredients = array ("farine", "levure", "yaourt", "sucre") ;
$quantiteIngredients = array (400, 10, 1, 200) ;

for($i = 0; $i < 4; $i = $i + 1) { 
    echo $listeIngredients [$i];
    echo $quantiteIngredients [$i];
    echo "<br/>";
}

/*OU*/  /*foreach ($listeIngredients as $i => $valeur_associee) {
    echo $listeIngredients [0] ;
    echo $quantiteIngredients [0] ;
    echo "<br/>" ;
    echo $listeIngredients [1] ;
    echo $quantiteIngredients [1] ;
    echo "<br/>" ;
    echo $listeIngredients [2] ;
    echo $quantiteIngredients [2] ;
    echo "<br/>" ;
    echo $listeIngredients [3] ;
    echo $quantiteIngredients [3] ;

break ;

}*/

?>