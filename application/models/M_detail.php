<?php

class M_detail extends CI_Model{

	
function cart($id){		
	// return $this->db->get_where($table,$where);
 $data = $this->db->get_where('barang', ['slug' => $id]);
	if($data->num_rows() == 0 ){
		redirect('home');
	} else {
	$this->db->select('*');
	$this->db->from('barang');
	$this->db->where('slug',$id);
	$this->db->join('suplayer', 'suplayer.id_suplayer = barang.id_suplayer');
	
	$query = $this->db->get()->row_array();
	}
	return $query;


}

}
