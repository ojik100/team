<?php 
 
class M_daftar_user extends CI_Model{
	public function get_data(){
		return $this->db->get('desa')->result();
	 }	
	 public function get_kec(){
		return $this->db->get('kecamatan')->result();
	 }	
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
