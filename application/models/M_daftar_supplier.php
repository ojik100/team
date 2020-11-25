<?php 
 
class M_daftar_supplier extends CI_Model{
	
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
