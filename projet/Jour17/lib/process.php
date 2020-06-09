<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=snowden;charset=utf8', 'root', '');
    echo 'Succesfully connected to database';
} catch (PDOException $error) {
    echo 'Failed connecting to database : '.$error->getMessage();
}
