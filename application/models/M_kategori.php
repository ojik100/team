<?php


class M_kategori extends CI_Model{
    public function get_data()
	{
		return $this->db->get('kategori')->result();
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	// public function getAll($where)
    // {     
    //     $this->db->select('a.*,b.nama as supllier');
    //       $this->db->order_by('a.nama_barang','desc');
    //       $this->db->from('barang a');
    //       $this->db->where('id_kategori',$where);
    //       $this->db->join('suplayer b', 'b.id_suplayer = a.id_suplayer','left');
         
    //       $query = $this->db->get()->result();

    //       return $query;
       
	// }
	

	public function getById($kategori)
    {
		$this->db->select('a.*,b.kategori');
		$this->db->from('barang a');
		$this->db->join('kategori b','b.id_kategori = a.id_kategori');
		$this->db->where('b.kategori',$kategori);
		$query = $this->db->get()->result();
		return $query;
    }
	
	}

