<?php


class M_kurir extends CI_Model{

    private $table = "kurir";

    public $id_kurir;
    public $nik;
    public $nama;
    public $jk;
    public $umur;
    public $alamat;
    public $desa;
    public $telpon;
    public $email;
	public $password;
	public $kecamatan;
	public $kabupaten;
	public $status_nikah;
	public $photo="default.png";
	public $verified;

    public function rules()
    {
        return [
            ['field' => 'nik',
            'label' => 'Nik',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'jk',
            'label' => 'Jk',
            'rules' => 'numeric'],

            ['field' => 'umur',
            'label' => 'Umur',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
			'rules' => 'required'],

			['field' => 'desa',
            'label' => 'Desa',
			'rules' => 'required'],
			
			['field' => 'telpon',
            'label' => 'telpon',
			'rules' => 'required'],
			
			['field' => 'email',
            'label' => 'Email',
			'rules' => 'required'],
			
			['field' => 'password',
            'label' => 'password',
			'rules' => 'required'],
			
			['field' => 'kecamatan',
            'label' => 'Kecamatan',
			'rules' => 'required'],
			
			['field' => 'kabupaten',
            'label' => 'Kabupaten',
			'rules' => 'required'],
			
			
		
			
		
            
        ];
	}
	public function get(){
		return $this->db->get('kurir')->result();
	 }
	 public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_kurir" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->jk = $post["jk"];
        $this->umur = $post["umur"];
        $this->alamat = $post["alamat"];
	    $this->desa = $post["desa"];
        $this->telpon = $post["telpon"];
        $this->email = $post["email"]; 
		$this->password = $post["password"];
        $this->kecamatan = $post["kecamatan"];
        $this->kabupaten = $post["kabupaten"]; 
		$this->status_nikah = $post["status_nikah"];
		$this->photo = $this->_uploadImage();
		$this->verified =$post["verified"];
      
        return $this->db->insert($this->table, $this);
	}
	public function update()
    {
		$post = $this->input->post();
		$this->id_kurir = $post["id_kurir"];
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->jk = $post["jk"];
        $this->umur = $post["umur"];
        $this->alamat = $post["alamat"];
	    $this->desa = $post["desa"];
        $this->telpon = $post["telpon"];
        $this->email = $post["email"];
		$this->password = $post["password"];
        $this->kecamatan = $post["kecamatan"];
        $this->kabupaten = $post["kabupaten"];
		$this->status_nikah = $post["status_nikah"];
		$this->photo = $this->_uploadImage();
		$this->verified =$post["verified"];
      
		return $this->db->update($this->table, $this, array('id_kurir' => $post['id_kurir']));
	}

    
	private function _uploadImage()
	{
		$config['upload_path']          = './upload/kurir/';
		$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = '';
			$config['max_width']            = '';
			$config['max_height']           = '';//  $config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
	
		$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload('photo')){
			  return $this->upload->display_errors();
			}else{
				$data = array('upload_data' => $this->upload->data());
				$data1=$this->upload->data();
			   return $data1['file_name'];
			}
	}
public function delete($id)
{
	$this->_deleteImage($id);
	return $this->db->delete($this->table, array("id_kurir" => $id));
}
private function _deleteImage($id)
{
    $kurir = $this->getById($id);
    if ($kurir->photo != "default.jpg") {
	    $filename = explode(".", $product->photo)[0];
		return array_map('unlink', glob(FCPATH."upload/kurir/$filename.*"));
	}
} 


}
