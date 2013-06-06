<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Battlegrounds/Battleground.php';


class Raids extends WLClases{
    
    public $battlegrounds = array();
    
    public function __construct(){
        parent::__construct();
        
        
    }
    
}
