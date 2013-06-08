<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Videos extends WLClases{
	
	public $videos = array();
	
	function __construct(){
		
		parent::__construct();
		
		$this->videos = $this->db->get_results("SELECT * FROM videos");
	}
	
	public function getVideos(){
		return $this->videos;
	}
}
	
?>