<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Videos extends WLClases{
	
	public $videos = array();
	
	function __construct(){
		
		parent::__construct();
		
		$this->videos = $this->db->get_results("SELECT * FROM videos ORDER BY id DESC",ARRAY_A);
	}
	
	public function getVideos($cant = 0){
		if ($cant == 0) {
			return $this->videos;
		} else {
			return array_slice($this->videos,0,$cant);			
		}
		
	}
}
	
?>