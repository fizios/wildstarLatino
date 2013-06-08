<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Imagenes extends WLClases{
	
	public $urls = array();
	
	function __construct(){
		
		parent::__construct();
		
		$this->urls = $this->db->get_results("SELECT * FROM imagenes");
	}
	
	public function getImagenes(){
		return $this->urls;
	}
}
	
?>