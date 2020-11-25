<?php 
 
class M_data_suplayer extends CI_Model{
	public function get_data(){
		return $this->db->get('suplayer')->result();
	 }	
	 function jumlah_data(){
		return $this->db->get('suplayer')->num_rows();
	}
	function getAl($number,$offset){

		return $query = $this->db->get('suplayer',$number,$offset)->result();                    

}public function get_product_keyword($keyword){
	$this->db->select('*');
	$this->db->from('suplayer');
	$this->db->like('nama',$keyword);
	
	return $this->db->get()->result();
}

}
