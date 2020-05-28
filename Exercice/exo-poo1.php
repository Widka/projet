<?php

class Exo1 {
     public $msg;
     public function __construct($msg = 'coucou') {
         $this->msg = $msg;
         echo $this->msg;
     }
}

$objet = new Exo1;




