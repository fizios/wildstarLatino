<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Dungeon extends WLClases{
    
    public $id;
    public $nombre = "";
    public $level = 0;
    public $descripcion = "";
    public $imagen = "";
    
    public function __construct($id){
        parent::__construct();
        
        $this->id = $id;
        
        $this->setNombre();        
        $this->setDescripcion();
        $this->setLevel();
        $this->setImagen();
    }
    
    public function setNombre(){
    	$this->nombre = $this->db->get_var("SELECT nombre FROM dungeon WHERE id = ".$this->id);
    }
    public function setDescripcion(){
    	$this->descripcion = $this->db->get_var("SELECT descripcion FROM dungeon WHERE id = ".$this->id);
    }
    public function setLevel(){
    	$this->level = $this->db->get_var("SELECT nivel_min FROM dungeon WHERE id = ".$this->id);
    }
    public function setImagen(){
    	$this->imagen = $this->db->get_var("SELECT imagen FROM dungeon WHERE id = ".$this->id);
    }
    
}