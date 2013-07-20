<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Categoria extends WLClases{
	
	public $nombre = "";
	public $subcategorias = array();
	
	function __construct($nombre){
		
		parent::__construct();
		
		$this->nombre = $nombre;
		
		$subcategorias = $this->db->get_results("SELECT nombre FROM $nombre");
		
		$this->subcategorias = $subcategorias;
	}
	
}