<?php


class M_desa extends CI_Model{
    public function get_data()
	{
		return $this->db->query('SELECT pihak_desa.id_pihak_desa,pihak_desa.kontak_kesehatan,pihak_desa.kontak_keamanan,pihak_desa.kontak_khusus,desa.nama_desa FROM pihak_desa
	    LEFT JOIN desa ON pihak_desa.id_desa=desa.id_desa ')->result();
	}
	public function get_data_desa()
	{
		return $this->db->get('desa')->result();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	
	}

