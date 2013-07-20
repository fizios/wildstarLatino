<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Imagen extends WLClases{
	
	public $id;
	public $titulo = "";
	public $url = "";
	public $categorias = array();
	
	function __construct($id = 0){
		
		parent::__construct();
		
		if($id != 0){
			$imagen = $this->db->get_results("SELECT * FROM imagenes where id= ".$id,ARRAY_A);
			$imagen = current($imagen);
			
			$this->id = $id;
			$this->titulo = $imagen['titulo'];
			$this->url = $imagen['url'];
			
			$this->setCategorias();
		}
	}
	
	private function setCategorias(){
		$res = $this->db->get_results("select * from imagen_categoria where id_imagen = ".$this->id, ARRAY_A);
		foreach ($res as $key => $value) {
			$this->categorias[trim($value['categoria'])] = trim($value['subcategoria']);
		}
	}
}
	
?>