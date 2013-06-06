<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/clases/Clase.php';

class Clases extends WLClases{
    
    public $clases = array();
    
    public function __construct(){
        parent::__construct();
        
        $clases = $this->db->get_results("SELECT id FROM clases",ARRAY_A);
        
        foreach ($clases as $clase){
            $this->clases[] = new Clase($clase['id']);
        }
    }
}
