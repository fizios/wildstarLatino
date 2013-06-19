<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Videos extends WLClases{
	
	public $videos = array();
	
	public $cant_videos = 0;
	
	function __construct(){
		
		parent::__construct();
		
		$this->videos = $this->db->get_results("SELECT * FROM videos ORDER BY id DESC",ARRAY_A);
		
		$this->cant_videos = sizeof($this->videos);
		
	}
	
	public function getVideos($cant = 0, $pagina = 1){
		if ($cant == 0) {
			return $this->videos;
		} else {
			return array_slice($this->videos, $cant * ($pagina-1), $cant);
		}
		
	}
}
	
?>