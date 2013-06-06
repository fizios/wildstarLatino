<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Paths/Path.php';

class Paths extends WLClases{
    
    public $paths = array();
    public $imagen = "";
    
    private $imagen_repo = "/imagenes/Paths/";
    
    public function __construct(){
        parent::__construct();
        
        $paths = $this->db->get_results("SELECT id from paths",ARRAY_A);
        
        foreach ($paths as $pathId){
        	$this->paths[] = new Path($pathId['id']);
        }
        
        $this->imagen = $this->imagen_repo."paths.png";
    }
}
