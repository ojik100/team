<?php


class M_barang extends CI_Model{
    private $table = "barang";

    public $id_barang;
    public $nama_barang;
    public $slug;
    public $keterangan;
    public $harga;
    public $id_kategori;
    public $stok;
    public $id_suplayer;
    public $status;
    public $satuan;
    public $gambar="default.png";

    public function rules()
    {
        return [
            ['field' => 'nama_barang',
            'label' => 'Nama_barang',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],
            
            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],

            ['field' => 'stok',
            'label' => 'Stok',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required']
            
        ];
    }
    function tottal($where){
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('suplayer','suplayer.id_suplayer = barang.id_suplayer');
        $this->db->where('id_desa',$where);
        $query = $this->db->get()->num_rows();

        return $query;
    }
    function tottals($where){
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_suplayer',$where);
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function jumlah_data(){
		return $this->db->get('barang')->num_rows();
	}
    public function getAl($number,$offset)
    {     
        $this->db->select('a.*,b.nama as supllier,c.kategori');
          $this->db->order_by('a.nama_barang','desc');
          $this->db->join('suplayer b', 'b.id_suplayer = a.id_suplayer','left');
          $this->db->join('kategori c', 'c.id_kategori = a.id_kategori','left');
          $query = $this->db->get('barang a',$number,$offset)->result();

          return $query;
       
    }
    ///wahyu taqdirul aziz 20-04-1998
    public function get_product_keyword($keyword){
        $this->db->select('a.*,b.nama as supllier,c.kategori');
        $this->db->order_by('a.nama_barang','desc');
        $this->db->from('barang a');
        $this->db->join('suplayer b', 'b.id_suplayer = a.id_suplayer','left');
        $this->db->join('kategori c', 'c.id_kategori = a.id_kategori','left');
        $this->db->join('pihak_desa d', 'd.id_pihak_desa = b.id_suplayer','left');
     
      
       $this->db->like('nama_barang',$keyword);
        $this->db->or_like('harga',$keyword);
        $this->db->or_like('keterangan',$keyword);
        $this->db->or_like('b.nama',$keyword);
       
       
        
        return $this->db->get()->result();
    }

    public function getAd()
    {     
        $this->db->select('a.*,b.nama as supllier,c.kategori');
          $this->db->order_by('a.nama_barang','desc');
          $this->db->from('barang a');
          $this->db->join('suplayer b', 'b.id_suplayer = a.id_suplayer','left');
          $this->db->join('kategori c', 'c.id_kategori = a.id_kategori','left');
          $query = $this->db->get()->result();

          return $query;
       
    }
    public function getAll($where)
    {     
        $this->db->select('a.*,b.nama as supllier,c.kategori');
          $this->db->order_by('a.nama_barang','desc');
          $this->db->from('barang a');
          $this->db->where('id_desa',$where);
          $this->db->join('suplayer b', 'b.id_suplayer = a.id_suplayer','left');
		  $this->db->join('kategori c', 'c.id_kategori = a.id_kategori','left');
		
          $query = $this->db->get()->result();

          return $query;
       
    }
    public function getbysup($id)
    {
        $this->db->select('a.*,c.kategori');
        $this->db->from("barang a");
        $this->db->where('id_suplayer',$id);
        // $this->db->join('supplier b', 'b.id = a.id_s','left');
        $this->db->join('kategori c', 'c.id_kategori = a.id_kategori','left');
        $q = $this->db->get();
        return $q->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_barang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_barang = $post["nama_barang"];
        $this->harga = $post["harga"];
        $this->slug = slug($post["nama_barang"]);
        $this->keterangan = $post["keterangan"];
        $this->stok = $post["stok"];
        $this->gambar = $this->_uploadImage();
        $this->status = $post["status"];
        $this->satuan = $post["satuan"];
        $this->id_kategori = $post["id_kategori"];
        $this->id_suplayer = $post["id_suplayer"]; 

        return $this->db->insert($this->table, $this);
    }

    
    public function update()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id"];
        $this->nama_barang = $post["nama_barang"];
        $this->harga = $post["harga"];
        $this->slug = slug($post["nama_barang"]);
        $this->keterangan = $post["keterangan"];
        $this->id_suplayer = $post["id_suplayer"];
        $this->stok = $post["stok"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_gambar"];
        }
        $this->status = $post["status"];
        $this->satuan = $post["satuan"];
        $this->id_kategori = $post["id_kategori"];

        return $this->db->update($this->table, $this, array('id_barang' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->table, array("id_barang" => $id));
    }

    private function _uploadImage()
{
    $config['upload_path']          = './upload/barang/';
    $config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = '';
		$config['max_width']            = '';
		$config['max_height']           = '';//  $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('gambar')){
		  return $this->upload->display_errors();
		}else{
            $data = array('upload_data' => $this->upload->data());
            $data1=$this->upload->data();
           return $data1['file_name'];
		}
}
private function _deleteImage($id)
{
    $product = $this->getById($id);
    if ($product->gambar != "default.jpg") {
	    $filename = explode(".", $product->gambar)[0];
		return array_map('unlink', glob(FCPATH."upload/barang/$filename.*"));
	}
} 

public function find($id){
    $result = $this->db->where('id_barang', $id)
                       ->limit(1)
                       ->get('barang');
        if($result->num_rows() > 0){
             return $result->row();
        }else{
             return array();
        }               
    


}

}
