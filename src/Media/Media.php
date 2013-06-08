<?php
include 'Imagenes.php';
include 'Videos.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Media extends WLClases{
	
	public $imagenes = array();
	public $videos = array();
	
	function __construct(){
		parent::__construct();
		
		$imagenes = new Imagenes();
		$this->imagenes = $imagenes->getImagenes();
		
		$videos = new Videos();
		$this->videos = $videos->getVideos();
	}
}
?>