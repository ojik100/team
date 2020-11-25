<?php 
 
class M_daftar_bumdes extends CI_Model{
	
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
