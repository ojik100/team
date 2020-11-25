<?php




class M_jadwal extends CI_Model{

	private $table = "jadwal_pesanan";

	public $id_pesanan;
	public $jam_pesan;
	public $jam_pengepulan;
	public $jam_pengiriman;
	public $id_suplayer;
	
	public function rules()
	{
		return [
			['field' => 'jam_pesan',
			'label' => 'jam_pesan',
			'rules' => 'required'],
  
			['field' => 'jam_pengepulan',
			'label' => 'jam_pengepulan',
			'rules' => 'required'],
			
			['field' => 'jam_pengiriman',
			'label' => 'jam_pengiriman',
			'rules' => 'required'],
  
			['field' => 'id_suplayer',
			'label' => 'id_suplayer',
			'rules' => 'required'],
  
			
		];
    }
    
    public function getad(){
        $where = $this->session->userdata('id_desa');
        $this->db->select('*');
        $this->db->from('jadwal_pesanan');
        $this->db->join('suplayer','suplayer.id_suplayer = jadwal_pesanan.id_suplayer');
        $this->db->where('id_desa',$where);
        $query = $this->db->get()->result();
        return $query;
    }
    public function gets(){
       
        $this->db->select('*');
        $this->db->from('jadwal_pesanan');
        $this->db->join('suplayer','suplayer.id_suplayer = jadwal_pesanan.id_suplayer');
        $query = $this->db->get()->result();
        return $query;
    }
	public function get(){
        $where = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('jadwal_pesanan');
        $this->db->where('id_suplayer',$where);
        $query = $this->db->get()->result();
        return $query;

	 }
public function save()
    {
        $post = $this->input->post();
        $this->jam_pesan = $post["jam_pesan"];
        $this->jam_pengepulan=$post["jam_pengepulan"];
        $this->jam_pengiriman = $post["jam_pengiriman"];
		$this->id_suplayer=$post["id_suplayer"];

        return $this->db->insert('jadwal_pesanan', $this);
	}

	public function delete($id)
    {
       
        return $this->db->delete($this->table, array("id_pesanan" => $id));
	}
}
