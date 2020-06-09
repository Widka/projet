<?php

    require_once "php/model/glossaire.php";

    // print_r($glossaire);

    function displayRandomTerm($array) 
    {
        $length = count($array);
        $index = mt_rand(0, $length -1);
        // var_dump($index);
        // echo '<pre>';
        // echo '<h1>';
        // print_r($array[$index]['title']);
        // echo '</h1>';
        // echo '<br>';
        // echo '<div>';
        // print_r($array[$index]['description']);
        // echo '</div>';
        // echo '</pre>';
        $title = $array[$index]['title'];
        $description = $array[$index]['description'];
        //  <div class="container">
        // <h1>Le terme est : {$title}</h1>
        // <p>La description est : {$description}</p>
        // </div> 
        $html = 
<<<OUTPUT
       <div class="card border-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">{$title}</div>
        <div class="card-body">
            <p class="card-text">{$description}</p>
        </div>
        </div>
OUTPUT;

        echo $html;

    }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glossaire des termes OPQUAST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Afficher un terme aléatoire</button>
        </form>
    </div>
    </nav>
   <?php displayRandomTerm($glossaire) ?>
    
</body>
</html>