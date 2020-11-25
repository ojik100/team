<?php


class M_info extends CI_Model{
	private $table = "info_desa";

   
    public $id_info;
    public $tgl;
    public $time;
    public $judul;
	public $gambar="default.png";
    public $berita;
	public $id_desa;
    public function rules()
    {
        return [
		

			['field' => 'tgl',
            'label' => 'tgl',
			'rules' => 'required'],
			
			['field' => 'time',
            'label' => 'time',
			'rules' => 'required'],
			
            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],  
           
			['field' => 'berita',
            'label' => 'berita',
			'rules' => 'required'],
			
			['field' => 'id_desa',
            'label' => 'id_desa',
            'rules' => 'required'],
		
            
        ];
    }

    public function jumlah_data(){
        return $this->db->get('info_desa')->num_rows();
    }
    public function getn(){
       $this->db->select('*');
       $this->db->from('info_desa');
       $this->db->order_by('tgl', 'desc');
       $query = $this->db->get()->result();
       return $query; 
    }
   
    public function getin($number,$offset){
        return $this->db->get('info_desa',$number,$offset)->result();
    }

    public function getsup(){
        return $this->db->get('info_desa')->result();
    }

	public function getAll($where)
    {     
		$this->db->select('*');
		$this->db->from('info_desa');
		$this->db->where('id_desa',$where);
		$query = $this->db->get();

		return $query->result();
         
     
       
	}
	public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_info" => $id])->row();
    }

	public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->table, array("id_info" => $id));
	}
	private function _deleteImage($id)
{
    $product = $this->getById($id);
    if ($product->gambar != "default.jpg") {
	    $filename = explode(".", $product->gambar)[0];
		return array_map('unlink', glob(FCPATH."upload/info/$filename.*"));
	}
} 
	function get($id){	
        $data = $this->db->get_where('info_desa', ['slug' => $id]);
	if($data->num_rows() == 0){
		redirect('info_desa');
	} else {	
        $this->db->select('*');
        $this->db->from('info_desa');
        $this->db->where('slug',$id);
        $this->db->join('pihak_desa','pihak_desa.id_desa = info_desa.id_desa');
        $query = $this->db->get()->row_array();
        return $query;
    }
	}
    public function save()
    {
        $post = $this->input->post();
        $this->tgl =	$post["tgl"];
        $this->time =	$post["time"];
        $this->judul = $post["judul"];
        $this->slug = slug($post["judul"]);
        $this->gambar = $this->_uploadImage();
        $this->berita = $post["berita"];
        $this->id_desa = $post["id_desa"];
       
        return $this->db->insert($this->table, $this);
	}
	public function update()
    {
		$post = $this->input->post();
		$this->id_info =$post["id"];
        $this->tgl =	$post["tgl"];
        $this->time =	$post["time"];
        $this->judul = $post["judul"];
        $this->slug = slug($post["judul"]);
        $this->berita = $post["berita"];
        $this->id_desa = $post["id_desa"];
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_gambar"];
        }
      
        return $this->db->update($this->table, $this, array('id_info' => $post['id']));
    }
	private function _uploadImage()
	{
			$config['upload_path']          = './upload/info/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = '';
			$config['max_width']            = '';
			$config['max_height']           = '';
		//  $config['max_size']             = 1024; 
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
	
		$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('gambar')){
			  return $this->upload->display_errors();
			}else{
				$data = array('upload_data' => $this->upload->data());
				$data1=$this->upload->data();
			   return $file=$data1['file_name'];
			}
    }
    
    public function get_info_keyword($keyword){
        $this->db->select('*');
        $this->db->from('info_desa');
        $this->db->join('pihak_desa','pihak_desa.id_desa = info_desa.id_desa');
        $this->db->or_like('nama_desa',$keyword);
        $this->db->or_like('judul',$keyword);
        $this->db->or_like('berita',$keyword);
        return $this->db->get()->result();
    }



}
