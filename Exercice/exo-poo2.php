<?php

class Header {
    
    public function __construct() {
        echo 'Header'.'<br>';
    }
}
class Section {
   
    public function __construct() {
        echo 'Section'.'<br>';
    }
}
class Footer {
    
    public function __construct() {
        echo 'Footer'.'<br>';
    }
}

$objetHeader    = new Header();
$objetSection   = new Section();
$objetFooter    = new Footer();