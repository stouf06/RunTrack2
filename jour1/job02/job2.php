<?php
//echo "Hello LaPlateforme" ; commentaire en ligne ; 
/*echo "Hello LaPlateforme" ; commentaire en bloc ; */
    $str = "LaPlateforme" ;
    $str2 = "!" ;
    $str3 = $str . $str2

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Hello LaPlateforme2 !"</title>
</head>
<body>
    <h1>Hello<?= $str3 ; ?></h1><!--1er commentaire en ligne-->
    <h1>Hello<br><?= $str3 ; ?></h1><!--2eme commentaire en colonne-->
    
    
</body>
</html>