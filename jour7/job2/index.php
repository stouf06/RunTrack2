<?php

function bonjour ($jour) {
    if ($jour == true) {
        echo "bonjour" ;
    }
    else {
        echo "bonsoir" ;
    }
    return $jour; 
}

bonjour (true) ;
echo "</br>" ;
bonjour (false) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>