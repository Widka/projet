<?php

// cette class me permet de géré ma BDD
class Database {
    // variable qui stocke une liste avec mon accès a la BDD
    private $tokenAuth;
    // ensuite je crée mon pdo, pour pouvoir me connecter a la BDD
    private $pdo;

    // je crée mon constructeur
    public function __construct() {
        // dans mon constructeur je vais définir mes accès de connexion
        $this->tokenAuth = array(
            'dbname' => 'clients',
            'host' => 'localhost',
            'user' => 'root',
            'password' => ''
        );
    }
    // je crée une méthode qui va me permettre de géré mon PDO
    private function getPDO() {
        // je crée ma connexion a la BDD
        try {
            // je vérifie si elle n'est pas déja connecté
            if($this->pdo == null) {
                // si c'est égal a null, elle n'as pas été crée, et donc pas encore utilisé
                $pdo = new PDO('mysql:dbname=' . $this->tokenAuth['dbname'] . ';host=' . $this->tokenAuth['host'], $this->tokenAuth['user'], $this->tokenAuth['password']);
                // ensuite je définis 2 attributs : ERRMODE et ERRMODE_EXCEPTION
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
            }
        } catch (PDOexception $e){
            var_dump($e);
        }
    }
}