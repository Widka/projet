<?php

class Page {
    public $content = "";   

    public function setContenu($string){
        $this->content = $string;
        
    }
    public function afficher(){
        echo "
        (header)<br />
        $this->content<br />
        (footer)
        ";
    }
}

$objetPage = new Page;                              
$objetPage->setContenu("LE CONTENU DE MA PAGE");    
$objetPage->afficher();  