<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Noticia extends WLClases{
    
    public $id;
    public $titulo = "";
    public $resumen = "";
    public $cuerpo = "";
    public $fecha = "";
    public $imagen = "";
    
    function __construct($id = 0){
        parent::__construct();
        
        if ($id != 0){
	        $this->id = $id;
	        
	        $this->setTitulo();
	        $this->setResumen();
	        $this->setImagen();
	        $this->setCuerpo();
	        $this->setFecha();
        }
    }
    
    public function setTitulo(){
    	$this->titulo = $this->db->get_var("select titulo from noticias where id = ".$this->id);
    }
    public function setResumen(){
    	$this->resumen = $this->db->get_var("select resumen from noticias where id = ".$this->id);
    }
    public function setCuerpo(){
    	$this->cuerpo = $this->db->get_var("select cuerpo from noticias where id = ".$this->id);
    }
    public function setImagen(){
    	$this->imagen = $this->db->get_var("select imagen from noticias where id = ".$this->id);
    }
    public function setFecha(){
    	$this->fecha = $this->db->get_var("select fecha from noticias where id = ".$this->id);
    }
    public function getIdByTitulo($titulo){
    	return $this->db->get_var("SELECT id FROM noticias where titulo = '".urldecode($titulo)."' ");
    }
}
