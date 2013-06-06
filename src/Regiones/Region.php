<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Region extends WLClases{
    
    public $id;
    public $nombre = "";
    public $faccion = "";
    public $descripcion = "";
    public $imagenes = array();
    
    public function __construct($id){
        parent::__construct();
        
        $this->id = $id;
        
        $this->setNombre();        
        $this->setDescripcion();
        $this->setFaccion();
        $this->setImagenes();
    }
    
    public function setNombre(){
    	$this->nombre = $this->db->get_var("SELECT nombre from region where id = ".$this->id);
    }
    public function setFaccion(){
    	$this->faccion = $this->db->get_var("SELECT faccion from region where id = ".$this->id);
    }
    public function setDescripcion(){
    	$this->descripcion = $this->db->get_results("select rd.texto from region_descripciones rd left join region r on r.id = rd.id_region where r.id = $this->id order by rd.orden",ARRAY_A);
    }
    public function setImagenes(){
    	$this->imagenes = $this->db->get_results("select ri.imagen from region_imagenes ri left join region r on r.id = ri.id_region where r.id = $this->id",ARRAY_A);
    }
    
}