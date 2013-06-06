<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Raid extends WLClases{
    
    public $id;
    public $nombre = "";
    public $descripcion = "";
    public $imagen = "";
    
    public function __construct($id){
        parent::__construct();
        
        $this->id = $id;
        
        $this->setNombre();
        $this->setDescripcion();
        $this->setImagen();
    }
    
    public function setNombre(){}
    public function setDescripcion(){}
    public function setImagen(){}
    
}
