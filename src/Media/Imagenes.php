<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Imagenes extends WLClases{
	
	public $imagenes = array();
	
	function __construct(){
		
		parent::__construct();
		
		$this->imagenes = $this->db->get_results("SELECT * FROM imagenes");
	}
	
	public function getImagenes($cant = 0){
		if ($cant == 0) {
			return $this->imagenes;
		} else {
			return array_slice($this->imagenes,0,$cant);			
		}
	}
}
	
?>