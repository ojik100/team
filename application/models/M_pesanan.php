<?php


class M_pesanan extends CI_Model{
    private $table = "pesan";

   
    public $id;
    public $qty;
    public $status;
    public $id_barang;
    public $tgl_pesan;
    public $jam;

    public function rules()
    {
        return [
            
            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required'],
            
         
            
        ];
    }
    public function tottal($where){
        $this->db->select('a.*,b.id_barang,b.nama_barang,b.id_suplayer,c.nama,d.nama as user,d.nik,e.id_pihak_desa,f.nama_desa');
        $this->db->from('pesan a');
        $this->db->join('barang b','b.id_barang = a.id_barang');
        $this->db->join('suplayer c','c.id_suplayer = b.id_suplayer');
        $this->db->join('user d','d.id = a.id');
		$this->db->join('pihak_desa e','e.id_desa = c.id_desa');
		$this->db->join('desa f','f.id_desa = c.id_desa');
        $this->db->where('e.id_desa',$where);
        $query = $this->db->get()->num_rows();
        return $query;
    }
    public function tottalad(){
        $this->db->select('a.*,b.id_barang,b.nama_barang,b.id_suplayer,c.nama,d.nama as user,d.nik,e.id_pihak_desa,f.nama_desa');
        $this->db->from('pesan a');
        $this->db->join('barang b','b.id_barang = a.id_barang');
        $this->db->join('suplayer c','c.id_suplayer = b.id_suplayer');
        $this->db->join('user d','d.id = a.id');
		$this->db->join('pihak_desa e','e.id_desa = c.id_desa');
		$this->db->join('desa f','f.id_desa = c.id_desa');
        $query = $this->db->get()->num_rows();
        return $query;
    }


    public function get($where){
        $this->db->select('a.*,b.id_barang,b.nama_barang,b.id_suplayer,c.nama,d.nama as user,d.nik,e.id_pihak_desa,f.nama_desa');
        $this->db->from('pesan a');
        $this->db->join('barang b','b.id_barang = a.id_barang');
        $this->db->join('suplayer c','c.id_suplayer = b.id_suplayer');
        $this->db->join('user d','d.id = a.id');
		$this->db->join('pihak_desa e','e.id_desa = c.id_desa');
		$this->db->join('desa f','f.id_desa = c.id_desa');
        $this->db->where('e.id_desa',$where);
        $query = $this->db->get()->result();
        return $query;
    }
    public function getsup($where){
        $this->db->select('a.*,b.id_barang,b.nama_barang,b.id_suplayer,c.nama,d.nama as user,d.nik,e.id_pihak_desa,f.nama_desa');
        $this->db->from('pesan a');
        $this->db->join('barang b','b.id_barang = a.id_barang');
        $this->db->join('suplayer c','c.id_suplayer = b.id_suplayer');
        $this->db->join('user d','d.id = a.id');
		$this->db->join('pihak_desa e','e.id_desa = c.id_desa');
		$this->db->join('desa f','f.id_desa = c.id_desa');
        $this->db->where('c.id_suplayer',$where);
        $query = $this->db->get()->result();
        return $query;
    }

    
    public function getAl()
    {     
        $this->db->select('a.*,b.id_barang,b.nama_barang,b.id_suplayer,c.nama,d.nama as user,d.nik,e.id_pihak_desa,f.nama_desa');
        $this->db->from('pesan a');
        $this->db->join('barang b','b.id_barang = a.id_barang');
        $this->db->join('suplayer c','c.id_suplayer = b.id_suplayer');
        $this->db->join('user d','d.id = a.id');
        $this->db->join('pihak_desa e','e.id_desa = c.id_desa');
		$this->db->join('desa f','f.id_desa = c.id_desa');
        $query = $this->db->get()->result();
        return $query;
       
    }
   

//     public function getAll()
//     {     
//   $query= $this->db->query("SELECT pesan.id,pesan.id_order,pesan.status, pesan.tgl_pesan, pesan.jam, barang.nama_barang, pesan.qty, pesan.total, suplayer.nama,user.nama as user,user.nik, pihak_desa.nama_desa 
//   FROM pesan,user, barang, suplayer, pihak_desa where pesan.id_barang = barang.id_barang and suplayer.id_desa = pihak_desa.id_desa and user.id = pesan.id");
         
         

//           return $query->result();
       
//     }
    

    /////anjayyyy
    public function getbyuser($where)
    {
        $this->db->select('a.*');
        $this->db->from("pesan a");
        $this->db->order_by('a.tgl_pesan','ASC');
        $this->db->where('id',$where);
        // $this->db->join('suplayer b', 'b.id = a.id_s','left');
        // $this->db->join('kategori c', 'c.id_kategori = a.id_kategori','left');
        $q = $this->db->get();
        return $q->row();
    }
    public function getById($id)
    {
        return $this->db->get_where('pesan', ["id_order" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->status = $post["status"];
        $this->id_barang = $post["id_barang"];
        $this->qty = $post["qty"];
        $this->total = $post["total"];
        $this->tgl_pesan = $post["tgl_pesan"];
        
    
    

        return $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_order = $post["id"];
        $this->id =["id_user"];
        $this->status = $post["status"];
        $this->id_barang = $post["id_barang"];
        $this->qty = $post["qty"];
        $this->total = $post["total"];
        $this->tgl_pesan = $post["tgl_pesan"];
        
        return $this->db->update('pesan', $this, array('id_order' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_order" => $id));
    }
    
    public function lap_bulan($bulan,$tahun,$desa){
     
        $this->db->select('a.*,b.id_barang,b.nama_barang,b.id_suplayer,c.nama,d.nama as user,d.nik,e.nama_desa');
        $this->db->from('pesan a');
        $this->db->join('barang b','b.id_barang = a.id_barang');
        $this->db->join('suplayer c','c.id_suplayer = b.id_suplayer');
        $this->db->join('user d','d.id = a.id');
        $this->db->join('pihak_desa e','e.id_desa = c.id_desa');
        $this->db->where('e.id_desa',$desa);
        $this->db->where('MONTH(tgl_pesan)',$bulan);
        $this->db->where('YEAR(tgl_pesan)',$tahun);
        $query = $this->db->get()->result();
        return $query;
       
      
    }
    public function lap_bulans($bulan,$tahun){
     
        $this->db->select('a.*,b.id_barang,b.nama_barang,b.id_suplayer,c.nama,d.nama as user,d.nik,e.nama_desa');
        $this->db->from('pesan a');
        $this->db->join('barang b','b.id_barang = a.id_barang');
        $this->db->join('suplayer c','c.id_suplayer = b.id_suplayer');
        $this->db->join('user d','d.id = a.id');
        $this->db->join('pihak_desa e','e.id_desa = c.id_desa');
        $this->db->where('MONTH(tgl_pesan)',$bulan);
        $this->db->where('YEAR(tgl_pesan)',$tahun);
        $query = $this->db->get()->result();
        return $query;
       
      
    }

    public function lap_bulansp($bulan,$tahun,$sup){
     
        $this->db->select('a.*,b.id_barang,b.nama_barang,b.id_suplayer,c.nama,d.nama as user,d.nik,e.nama_desa');
        $this->db->from('pesan a');
        $this->db->join('barang b','b.id_barang = a.id_barang');
        $this->db->join('suplayer c','c.id_suplayer = b.id_suplayer');
        $this->db->join('user d','d.id = a.id');
        $this->db->join('pihak_desa e','e.id_desa = c.id_desa');
        $this->db->where('MONTH(tgl_pesan)',$bulan);
        $this->db->where('YEAR(tgl_pesan)',$tahun);
        $this->db->where('c.id_suplayer',$sup);
        $query = $this->db->get()->result();
        return $query;
       
      
    }
   
    




}
