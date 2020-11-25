<?php


class Kategori extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("M_kategori");
		$this->load->library('form_validation');
		if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }else if($this->session->userdata('level')== 2){
			redirect('dashboard');
		}
    }
	public function index(){
		
		$data['page']='admin/kategori/kategori';
		$data['kategori'] 	= $this->M_kategori->get_data();
		$this->load->view('admin/template/base',$data);
	
		
	}
	public function tambah(){
		
		$data['page']='admin/kategori/tambah';
		$this->load->view('admin/template/base',$data);
		
	}
	
	public function aksi_tambah()
	{ 
		$kategori 	= $this->input->post('kategori');
		$data = array(
			'kategori'  => $kategori,
		);
		$this->M_kategori->input_data($data, 'kategori');
		redirect('kategori');	
	}
	function hapus($id)
	{
	
	$where = array('id_kategori' => $id);
	$this->M_kategori->hapus_data($where,'kategori');
	redirect('kategori');
}


}
