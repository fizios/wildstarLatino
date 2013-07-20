<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Imagenes extends WLClases{
	
	public $imagenes = array();
	
	public $cantImagenes = 0;
	
	function __construct($pagina = 1, $cantidad = 10, $categoria = 'todas', $subcategoria = ''){
		
		parent::__construct();
		
		
		
		$query = "SELECT * FROM imagenes img";
		$queryCantidad = "SELECT COUNT(id) FROM imagenes img";
		
		if($categoria != 'todas'){
			$query .= " left join imagen_categoria img_cat on img.id = img_cat.id_imagen where img_cat.categoria = '$categoria' AND img_cat.subcategoria = '$subcategoria' ";
			$queryCantidad .= " left join imagen_categoria img_cat on img.id = img_cat.id_imagen where img_cat.categoria = '$categoria' AND img_cat.subcategoria = '$subcategoria' ";
		}
		
		$this->cantImagenes = $this->db->get_var($queryCantidad);
		
		$offset = $cantidad * ($pagina -1 );
		$query .= " ORDER BY RAND() LIMIT $cantidad OFFSET $offset";
		
		$this->imagenes = $this->db->get_results($query);
		
		
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