<?php

    $username = "root";
    $password = ""; // Ou "root" sous ios
    $database = new PDO("mysql:host=localhost;dbname=jour09", $username, $password);

    $query = $database->query("SELECT * FROM etudiants") ;

    /*$sql = "SELECT id, prenom, nom, naissance, sexe, email FROM etudiants" ;*/

    /*print_r($resultat) ;*/

    /*while($line = $query->fetch()) {
        echo "<br/> <br/> ";

        echo "L'utilisateur n°" . $line["id"];
        echo $line["name"];
        echo " avec l'adresse email " . $line["email"];
        echo " est né le " . $line["naissance"];
    }*/
    /*while ($resultat = $query->fetchAll()) {

    }*/

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau jour10/job01</title>
    <style>
        table {
            border-collapse: collapse ;
            width: 100% ;
        }
        th, td {
            border: 1px solid black ;
            padding: 8px ;
            text-align: left ;
        }
        th {
            background-color: grey ;
        }
    </style>
</head>
<body>
    <h2>Tableau des données</h2>
    <table>
               
        <thead>
            <tr>
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
               
        <body>
            <?php while ($ligne = $query->fetch()): ?>
            <tr>
                <td><?php echo ($ligne['id']); ?></td>
                <td><?php echo ($ligne['prenom']); ?></td>
                <td><?php echo ($ligne['nom']); ?></td>
                <td><?php echo ($ligne['naissance']); ?></td>
                <td><?php echo ($ligne['sexe']); ?></td>
                <td><?php echo ($ligne['email']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>