<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Categoria extends WLClases{
	
	public $nombre = "";
	public $subcategorias = array();
	
	function __construct(){
		
	}
	
}