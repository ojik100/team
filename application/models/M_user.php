<?php




class M_user extends CI_Model{

  private $table = "user";

  public $id;
  public $nik;
  public $nama;
  public $jk;
  // public $umur;
  public $alamat;
  public $desa;
  public $telpon;
  public $email;
  public $kecamatan;
  public $kabupaten;
  public $status_nikah;
  public $longitude;
  public $lattitude;
  public $verified;
  public function rules()
  {
      return [
          ['field' => 'nama',
          'label' => 'Nama',
          'rules' => 'required'],

          ['field' => 'alamat',
          'label' => 'Alamat',
          'rules' => 'required'],
          
          ['field' => 'telpon',
          'label' => 'Telpon',
          'rules' => 'required'],

          ['field' => 'longitude',
          'label' => 'Longitude',
          'rules' => 'required'],

          ['field' => 'lattitude',
          'label' => 'Lattitude',
          'rules' => 'required'],

          ['field' => 'email',
          'label' => 'Email',
          'rules' => 'required'],

         
          
          ['field' => 'nik',
          'label' => 'Nik',
          'rules' => 'required'],

          ['field' => 'desa',
          'label' => 'Desa',
          'rules' => 'required'],

          ['field' => 'kecamatan',
          'label' => 'Kecamatan',
          'rules' => 'required'],

          ['field' => 'kabupaten',
          'label' => 'Kabupaten',
          'rules' => 'required'],

          ['field' => 'status_nikah',
          'label' => 'Status_nikah',
          'rules' => 'required'],

          // ['field' => 'aktif',
          // 'label' => 'Aktif',
          // 'rules' => 'required'],
      ];
  }
  public function tottal(){
    return $this->db->get('user')->num_rows();
  }
    public function getall(){
      return $this->db->get('user')->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function save()
    {
		$post = $this->input->post();
	
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->jk = $post["jk"];
        // $this->umur = $post["umur"];
        $this->alamat =$post["alamat"];
        $this->desa =$post["desa"] ;
        $this->telpon = $post["telpon"];
        $this->email = $post["email"];
        $this->kecamatan = $post["kecamatan"];
        $this->kabupaten = $post["kabupaten"];
        $this->status_nikah =$post["status_nikah"];
        $this->longitude = trim($post["longitude"]);
        $this->lattitude = trim($post["lattitude"]);
        $this->verified = $post["aktif"];

        return $this->db->insert('user', $this);
	}
	
	



	public function update(){
		$post = $this->input->post();
		$this->id = $post["id"];
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->jk = $post["jk"];
        // $this->umur = $post["umur"];
        $this->alamat =$post["alamat"];
        $this->desa =$post["desa"] ;
        $this->telpon = $post["telpon"];
        $this->email = $post["email"];
        $this->kecamatan = $post["kecamatan"];
        $this->kabupaten = $post["kabupaten"];
        $this->status_nikah =$post["status_nikah"];
        $this->longitude = trim($post["longitude"]);
        $this->lattitude = trim($post["lattitude"]);
		$this->verified = $post["aktif"];
		
		return $this->db->update($this->table, $this, array('id' => $post['id']));
       
    }
	public function get_data()
	{
		return $this->db->get('user')->result_array();
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	

    public function delete($id)
    {
        
        return $this->db->delete($this->table, array("id" => $id));
    }

}
