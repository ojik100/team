<?php 
 
class M_data_desa extends CI_Model{
	public function get_data(){
		return $this->db->get('desa')->result();
	 }	
	 function jumlah_data(){
		return $this->db->get('desa')->num_rows();
	}
	function getAl($number,$offset){
		$this->db->select('a.*,b.*,c.*');
		$this->db->order_by('a.nama_desa','desc');
		$this->db->join('kecamatan b', 'b.id_kec = a.id_kec','left');
		$this->db->join('kabupaten c', 'c.id_kab = b.id_kab','left');
		$query = $this->db->get('desa a',$number,$offset)->result();

	return $query;
	
}
}
