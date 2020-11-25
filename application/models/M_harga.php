<?php


class M_harga extends CI_Model{
	public function get_data(){
		return $this->db->get('harga_sembako')->result();
		
	 }	
	
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function jumlah_data(){
		return $this->db->get('harga_sembako')->num_rows();
	}
	function getAl($number,$offset){

		return $query = $this->db->get('harga_sembako',$number,$offset)->result();                    

}
public function get_product_keyword($keyword){
	$this->db->select('*');
	$this->db->from('harga_sembako');
	$this->db->like('nama_barang',$keyword);
	$this->db->or_like('harga',$keyword);
	return $this->db->get()->result();
}
function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}
}
