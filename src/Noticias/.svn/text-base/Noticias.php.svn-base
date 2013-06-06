<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Noticias/Noticia.php';

class Noticias extends WLClases{
    
    public $noticias = array();
    public $cant_noticias = 0;
    
    public function __construct($cant_noticias = 5, $pagina = 1){
    	
		parent::__construct();
		
		$this->cant_noticias = $this->db->get_var("SELECT COUNT(id) FROM noticias");
		
		
		
		//tengo q validar que la pagina pedida exista
		$cant_paginas = ceil($this->cant_noticias / $cant_noticias);
		if ($cant_paginas < $pagina){
			header("Location:/news?pagina=1");
		}
    	
		$offset = $cant_noticias * ($pagina -1 );
		$noticias_id = $this->db->get_results("select id from noticias order by fecha DESC LIMIT $cant_noticias OFFSET $offset",ARRAY_A);
		
		foreach ($noticias_id as $key => $noticia_id) {
			$this->noticias[] = new Noticia($noticia_id['id']);
		}
    }
    
    public function getNoticias($cantidad){
   		
    	$res = array();
    	
    	if ($cantidad > count($this->noticias)){
    		$cantidad = count($this->noticias);
    	}
    	
    	for ($i=0;$i < $cantidad; $i++){
    		$res[] = $this->noticias[$i];
    	}
    	
    	return $res;
    }
}
