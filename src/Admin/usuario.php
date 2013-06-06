<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';

class Usuario extends WLClases{
	
	public $user = "";
	public $pass = "";
    
    public function __construct($nombre, $pass){
        parent::__construct();
        
		$this->user = $nombre;
		$this->pass = $pass;
        
    }
	
	public function validarLogin(){
		$consulta = sprintf("SELECT * FROM usuarios WHERE nombre='%s' AND pass='%s'",
            mysql_real_escape_string($this->user),
            mysql_real_escape_string($this->pass));
		$res = $this->db->get_var($consulta);
		if($res){
			return true;
		}
		return false;
	}
}