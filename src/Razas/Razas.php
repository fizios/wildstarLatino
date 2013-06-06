<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Razas/Raza.php';

class Razas extends WLClases{
	
	public $razas = array();
    
    public function __construct(){
        parent::__construct();
        
        $razas = $this->db->get_results("SELECT id FROM razas",ARRAY_A);
        
        foreach ($razas as $raza){
            $this->razas[] = new Raza($raza['id']);
        }
    }
}