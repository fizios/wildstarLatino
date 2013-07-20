<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/src/Media/Imagenes.php';

class Clase extends WLClases{
    
    public $nombre = "";
    
    public $rol = array();
    public $tipo_arma = "";
    public $tipo_armadura = "";
    public $energia_habilidades = "";
    public $stats_principales = "";    
    
    public $descripcion_corta = "";
    public $descripcion_larga = "";
    public $imagen = "";
	public $imagenes;
    public $banner = "";
    public $razas = array();
    
    private $claseId;
    
    private $img_repo = "/imagenes/Clases/";
    private $banner_repo = "/imagenes/headers/clases/";
    
    public function __construct($claseId){
        parent::__construct();
        
        $this->claseId = $claseId;
        
        $this->setNombre();
        $this->setRol();
        $this->setTipoArma();
        $this->setTipoArmadura();
        $this->setEnergiaHabilidades();
        $this->setStatsPrincipales();
        $this->setDescCorta();
        $this->setDescLarga();
        $this->setImagen();
        $this->setBanner();
        $this->setRazas();
		$this->setImagenes();
        
    }
    
    public function setNombre(){
    	$this->nombre = $this->db->get_var("SELECT nombre from clases where id=".$this->claseId);
    }
    public function setRol(){
    	$this->rol = $this->db->get_var("SELECT rol from clases where id=".$this->claseId);
    }
    public function setTipoArma(){
    	$this->tipo_arma = $this->db->get_var("SELECT tipo_arma from clases where id=".$this->claseId);
    }
    public function setTipoArmadura(){
    	$this->tipo_armadura = $this->db->get_var("SELECT tipo_armadura from clases where id=".$this->claseId);
    }
    public function setEnergiaHabilidades(){
    	$this->energia_habilidades = $this->db->get_var("SELECT energia_habilidad from clases where id=".$this->claseId);
    }
    public function setStatsPrincipales(){
    	$this->stats_principales = $this->db->get_var("SELECT stats_principales from clases where id=".$this->claseId);
    }
    public function setDescCorta(){
    	$this->descripcion_corta = $this->db->get_var("SELECT descripcion_corta from clases where id=".$this->claseId);
    }
    public function setDescLarga(){
    	$this->descripcion_larga = $this->db->get_results("SELECT cd.texto FROM clases_desc_larga cd LEFT JOIN clases c ON cd.idClase=c.id WHERE c.id = ".$this->claseId,ARRAY_A);
    }
    public function setImagen(){
    	$this->imagen = $this->img_repo.$this->db->get_var("SELECT imagen from clases where id=".$this->claseId);
    }
	public function setBanner(){
    	$this->banner = $this->banner_repo.$this->db->get_var("SELECT imagen_banner from clases where id=".$this->claseId);
    }
    public function setRazas(){
    	$this->razas =  $this->db->get_results("SELECT r.nombre FROM razas r left join clase_raza cr on cr.id_raza=r.id left join clases c on c.id=cr.id_clase where c.id = ".$this->claseId,ARRAY_A);
    }
    private function setImagenes(){
    	$cantidad = 10;
		$pagina = 1;
		$categoria = 'clases';
		$subcategoria = $this->nombre;
		
		$imagenes = new Imagenes($pagina,$cantidad,$categoria,$subcategoria);
		$this->imagenes = $imagenes->getImagenes();
    }
}
