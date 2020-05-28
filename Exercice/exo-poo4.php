<?php

class Page {

    public $content = '';

    public function ajouterContenu($string){
        $this->content .= $string .'<br />';
    }

    public function afficherListe(){
        echo "
        (header)<br />
        $this->content
        (footer)<br />
        ";
    }
}



$objetPage = new Page;                     
$objetPage->ajouterContenu("SECTION1");
$objetPage->ajouterContenu("SECTION2");
$objetPage->ajouterContenu("SECTION3");
$objetPage->afficherListe();