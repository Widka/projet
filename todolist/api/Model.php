<?php

// on a besoin d'une interaction a la BDD
require_once 'Database.php';
// on a besoin d'une classe qui va gérer les interactions avec la bdd
// CRUD

class Model 
{
    public function getTodos() 
    {
        $pdo = $this->getConnection();

        $query = "SELECT * FROM todos"; //ceci est juste une chaîne de caractère

        $PdoStatement = $pdo->prepare($query);

        $PdoStatement->execute();

        // debug : affichage du résultat
        print_r($PdoStatement->fetchAll());
    }
    public function createTodo($todo)
    {
        // établir une connexion a la db
        $pdo = $this->getConnection();
        // écrire la requête en insertion
        $query = 'INSERT INTO todos (title, description) VALUES (:title, :description)';
        // $query = "INSERT INTO todos 
        // (title, description)
        // values
        // ('".$_GET["title"]."', '".$_GET["description"]."')";
        // préparer la requête
        $PdoStatement = $pdo->prepare($query);
        // exécuter la requête en passant les bonnes valeurs
        // retourner le résultat de la requête (dans notre cas true ou false)
        return $PdoStatement->execute($todo);

    }
    public function updateTodo()
    {

    }
    public function deleteTodo($todo)
    {
        $pdo = $this->getConnection();
        $query = 'DELETE FROM todos WHERE id = :id';
        $PdoStatement = $pdo->prepare($query);
        $values = [
            "id" => $todo['id'],
        ];
        return $PdoStatement->execute($values);
    }
    // on crée une méthode qui va nous permettre de créer une nouvelle instance
    // de la classe Database et qui va retourner un objet PDO
    // cette méthode sera privée, elle ne sera accessible que depuis cette classe
    private function getConnection()
    {
        // on va créer une nouvelle instance de Database
        $db = new Database();
        // ici je retourne un objet PDO que je pourrai utiliser pour mes requêtes
        return $db->connect();
    }
    
    
}

$model = new Model();
$response = $model->deleteTodo([
    'id' => '2',
    ]);
var_dump($response);
// $model->getTodos();