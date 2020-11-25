<?php


class M_admin extends CI_Model{
    

    public $id_admin;
    public $nama_admin;
    public $username;
    public $password;
    public $id_desa;
   

    public function rules()
    {
        return [
            ['field' => 'nama_admin',
            'label' => 'Nama_admin',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],
            
        ];
    }
    public function get()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->join('pihak_desa','pihak_desa.id_desa = admin.id_desa');
        $query = $this->db->get()->result();
        return $query;

    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_admin = $post['nama_admin'];
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->id_desa = $post['id_desa'];

        return $this->db->insert('admin', $this);
    }
}