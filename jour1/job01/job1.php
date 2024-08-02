<?php
    $str = "LaPlateforme" ;
    $str2 = "Vive" ;
    $str3 = "!" ;
    $str4 = $str2 . $str . $str3;
    $val = 6 ;
    $val + $val2 = 10 ;
    $val2 = 4 ;
    $myBool = "true" ;
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Hello LaPlateforme!"</title>
</head>
<body>
    <h1>Hello<?= $str ; ?></h1>
    <p><?= $str4 ; ?></p>
    <?= $val ; ?>
    <br><?= $val + 4 ; ?>
    <br><p><?= $myBool ; ?></p>
    <br><p><?= $myBool ; ?>false</p>   
    
</body>
</html>