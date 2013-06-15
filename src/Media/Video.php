<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Video extends WLClases{
	
	public $id;
	public $nombre = "";
	public $youtubeId = "";
	
	function __construct($id = 0){
		
		parent::__construct();
		
		if($id != 0){
			$video = $this->db->get_results("SELECT * FROM videos where id= ".$id,ARRAY_A);
			$video = current($video);
			$this->id = $id;
			$this->nombre = $video['nombre'];
			$this->youtubeId = $video['youtube_id'];
		}
	}
}
	
?>