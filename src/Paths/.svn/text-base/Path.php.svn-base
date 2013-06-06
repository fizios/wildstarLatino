<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Path extends WLClases{
    
    public $id;
    public $nombre = "";
    public $nombre_es = "";
    public $descripcion;
    public $tipo_misiones = array();
    public $imagen = "";
    
    private $imagen_repo = "/imagenes/Paths/";
    
    public function __construct($id){
        parent::__construct();
        
        $this->id = $id;
        
        $this->setNombre();
        $this->setDescripcion();
        $this->setMisiones();
        $this->setImagen();
    }
    
    public function setNombre(){
		$this->nombre = $this->db->get_var("SELECT nombre from paths where id=".$this->id);
		$this->nombre_es = $this->db->get_var("SELECT nombre_es from paths where id=".$this->id);
    }
    public function setDescripcion(){
    	$this->descripcion = $this->db->get_var("SELECT descripcion from paths where id=".$this->id);
    }
    public function setMisiones(){
    	$this->tipo_misiones = $this->db->get_results("SELECT pm.* from paths_misiones pm left join paths p on p.id = pm.id_path where p.id =".$this->id);
    }
    public function setImagen(){
    	$this->imagen = $this->imagen_repo.$this->db->get_var("SELECT imagen from paths where id=".$this->id);
    }
}
