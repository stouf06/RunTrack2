<?php

$choix= $_GET ["choix"] ;

    if ($choix == 1) {
        echo "dracaufeu" ;
        echo "/est un personnage de pokemon" ;
    }
    else if ($choix == 2) {
        echo "tiplouf" ;
        echo "/est un personnage de pokemon" ;
    }
    else if ($choix == 3) {
        echo "bulbizarre" ;
        echo "/est un personnage de pokemon" ;
    }
    else if ($choix == 4) {
        echo "tortipouss" ; 
        echo "/est un personnage de pokemon" ;
    }
    else if ($choix == 5) {
        echo "pikachu" ; 
        echo "/est un personnage de pokemon" ;
    }
    else if ($choix == 6) {
        echo "mew" ; 
        echo "/est un personnage de pokemon" ;
    }
    else {
    echo "n'est pas un personnage de pokemon" ;
    }

?>




<!-- 
// $choix= 4 ;



//     if ($choix==1) {
//         echo "dracaufeu" ;
//         echo "est un personnage de pokemon" ;
//     }
//     else if ($choix==2) {
//         echo "tiplouf" ;
//         echo"est un personnage de  <br/>" ;
//     }
//     else if ($choix==3) {
//         echo "bulbizarre" ;
//         echo "est un personnage de  <br/>" ;
//     }
//     else if ($choix==4) {
//         echo "tortipouss" ; 
//         echo "est un personnage de  <br/>" ;
//     }
//     else if ($choix==5) {
//         echo "pikachu" ; 
//         echo "est un personnage de  <br/>" ;
//     }
//     else if ($choix==6) {
//         echo "mew" ; 
//         echo "est un personnage de  <br/>" ;
//     }
//     else {
//     echo "n'est pas un personnage de  <br/>" ;
//     }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" method="get">
        <input type="text" name="choix" id="">
        <input type="submit" value="" name="">
    </form>
</body>
</html> -->