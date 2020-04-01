<?php 

require_once 'config.php';

class Database
{
     // cette propriété va contenir une instance de la classe PDO
     public $conn;

    // on déclare les propriétés (variables)
    private $dsn;
    private $username;
    private $pwd;
    private $options;

    // on déclare les méthodes (fonctions)

    // le constructeur est exécuté immédiatement lors de la création
    //  d'une nouvelle instance de la classe (un nouvel objet)
    // ref sur les constructeurs : https://www.w3schools.com/php/php_oop_constructor.asp
    public function __construct()
    {
        // $this-> = utiliser pour allez chercher la variable
        $this->dsn = DSN;
        $this->username = USERNAME;
        $this->pwd = PWD;
        $this->options = OPTIONS;
    }

    public function connect()
    {
        try
        {
            // on va stocker dans la propriété de classe conn une nouvelle instance de l'objet PDO
            $this->conn = new PDO($this->dsn, $this->username, $this->pwd, $this->options);
            echo 'Connexion établie';
        }
        catch (PDOException $error)
        {
            echo 'Error : '.$error->getMessage();
        }
        return $this->conn;
    }
}
// $db = new Database();

// $pdo = $db->connect();


// EXEMPLE D'AUTRE CLASS
// class User {
//     public $name;
//     public $address;
//     public $country; 

//     // méthodes
//     public function __construct($name, $address, $country) 
//     {
//         $this->name = $name;
//         $this->address = $address;
//         $this->country = $country;
//     }
// }

// $user1 = new User('Frank', 'Aubagne', 'France')
// $name = $user1->name;