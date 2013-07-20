<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Media/Categoria.php';

class Categorias extends WLClases{
	
	public $categorias = array();
	
	function __construct(){
		
		parent::__construct();
		
		$categorias = $this->db->get_results("SELECT * FROM categorias");
		
		foreach ($categorias as $key => $categoria) {
			$this->categorias[] = new Categoria($categoria->categoria);
		}
	}
}