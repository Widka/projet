<?php

// on inclut la connexion a la bdd
require_once('connect.php');

$sql = 'SELECT * FROM `login`';

// on prépare la requête
$query = $db->prepare($sql);

// on execute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD Login</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <table class="table">
                    <thead>
                        <th>ID : </th>
                        <th>Pseudo : </th>
                        <th>Email : </th>
                        <th>Date de création du compte : </th>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($result as $membre){
                        ?>  
                            <tr>
                                <td><?= $membre['id'] ?></td>
                                <td><?= $membre['pseudo'] ?></td>
                                <td><?= $membre['email'] ?></td>
                                <td><?= $membre['date'] ?></td>
                            </tr>
                        <?php    
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</body>
</html>