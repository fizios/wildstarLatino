<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/src/WLClases.php';
include $_SERVER['DOCUMENT_ROOT'].'/src/Dungeons/Dungeon.php';


class Dungeons extends WLClases{
    
    public $dungeons = array();
    
    public function __construct(){
        parent::__construct();
        
        $dungeons_id = $this->db->get_results("SELECT id FROM dungeon",ARRAY_A);
        
        foreach ($dungeons_id as $dungeon_id){
        	$this->dungeons[] = new Dungeon($dungeon_id['id']);
        }
        
        
    }
}
