<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Regiones/Region.php';


class Regiones extends WLClases{
    
    public $regiones = array();
    
    public function __construct(){
        parent::__construct();
        
        $id_regiones = $this->db->get_results("SELECT id from region",ARRAY_A);
        
        foreach ($id_regiones as $id){
			$region = new Region($id['id']);
			$this->regiones[$region->faccion][] = $region;
        }
        
        
    }
}
