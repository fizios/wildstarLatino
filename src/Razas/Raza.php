<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/src/Media/Imagenes.php';

class Raza extends WLClases{
	
	public $nombre = "";
	public $faccion = "";
	public $descripcion = "";
	public $historia = array();
	public $imagen = "";
	public $banner = "";
	public $clases = array();
	public $imagenes;
	
	private $razaId;
	
	private $img_repo = "/imagenes/Razas/";
	private $banner_repo = "/imagenes/headers/razas/";
	
	public function  __construct($razaId){
		
        parent::__construct();
        
		$this->razaId = $razaId;
		
		$this->nombre = $this->setNombre();
		$this->faccion = $this->setFaccion();
		$this->descripcion = $this->setDescripcion();
		$this->historia = $this->setHistoria();
		$this->imagen = $this->setImagen();
		$this->banner = $this->setBanner();
		$this->clases = $this->setClases();
		
		$this->setImagenes();
	}
	
	public function setNombre(){
		$res =  $this->db->get_var("SELECT nombre from razas where id=".$this->razaId);
		return $res;
	}
	public function setFaccion(){
		$res =  $this->db->get_var("SELECT faccion from razas where id=".$this->razaId);
		return $res;
	}
	public function setDescripcion(){
		$res =  $this->db->get_var("SELECT descripcion from razas where id=".$this->razaId);
		return $res;
	}
	public function setHistoria(){
		$res =  $this->db->get_results("SELECT rh.texto FROM razas r left join razas_historia rh on rh.raza = r.id where r.id = ".$this->razaId." order by rh.orden",ARRAY_A);
		return $res;
	}
	public function setImagen(){
		$res =  $this->img_repo.$this->db->get_var("SELECT imagen from razas where id=".$this->razaId);
		return $res;
	}
	public function setBanner(){
		$res =  $this->banner_repo.$this->db->get_var("SELECT banner from razas where id=".$this->razaId);
		return $res;
	}
	public function setClases(){
		$res =  $this->db->get_results("SELECT c.nombre FROM razas r left join clase_raza cr on cr.id_raza=r.id left join clases c on c.id=cr.id_clase where r.id = ".$this->razaId,ARRAY_A);
		return $res;
	}
	
	private function setImagenes(){
		$cantidad = 10;
		$pagina = 1;
		$categoria = 'razas';
		$subcategoria = $this->nombre;
		
		$imagenes = new Imagenes($pagina,$cantidad,$categoria,$subcategoria);
		$this->imagenes = $imagenes->getImagenes();
	}
}

