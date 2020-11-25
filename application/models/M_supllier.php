<?php




class M_supllier extends CI_Model{

  private $table = "suplayer";

  public $id_suplayer;
  public $id_desa;
  public $nama;
  public $username;
  public $email;
  public $password;
  public $alamat;
  public $kontak;
  public $longitude;
  public $lattitude;
  public function rules()
  {
      return [
          ['field' => 'nama',
          'label' => 'Nama',
          'rules' => 'required'],

          ['field' => 'alamat',
          'label' => 'Alamat',
          'rules' => 'required'],
          
          ['field' => 'kontak',
          'label' => 'Kontak',
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

          ['field' => 'password',
          'label' => 'Password',
          'rules' => 'required'],
          
          ['field' => 'username',
          'label' => 'Username',
          'rules' => 'required'],
      ];
  }

     public function getad(){
            return $this->db->get('suplayer')->num_rows();
    }
    
    public function get(){
       return $this->db->get('suplayer')->result();
    }
    public function tottal($where){
        $this->db->select('*');
        $this->db->from('suplayer');
        $this->db->where('id_desa',$where);
         $query = $this->db->get()->num_rows();

        return $query;
      
    }

    public function getall($where){
        $this->db->select('*');
        $this->db->from('suplayer');
        $this->db->where('id_desa',$where);
         $query = $this->db->get()->result();

        return $query;
      
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_suplayer" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->id_desa=$post["id_desa"];
        $this->kontak = $post["kontak"];
        $this->alamat = $post["alamat"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->email =$post["email"] ;
        $this->longitude =$post["longitude"];
        $this->lattitude =$post["lattitude"];

        return $this->db->insert('suplayer', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_suplayer =$post["id"];
        $this->id_desa =$post["id_desa"];
        $this->nama = $post["nama"];
        $this->kontak = $post["kontak"];
        $this->alamat = $post["alamat"];
        $this->username = $post["username"];
        $this->password = ["password"];
        $this->email =$post["email"] ;
        $this->longitude =$post["longitude"];
        $this->lattitude =$post["lattitude"];


        return $this->db->update($this->table, $this, array('id_suplayer' => $post['id']));
    }

    public function delete($id)
    {
       
        return $this->db->delete($this->table, array("id_suplayer" => $id));
    }
}
