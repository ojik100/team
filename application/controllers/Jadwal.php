<?php


class Jadwal extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_jadwal');
		if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }
	
	
	}
	public function index(){
		$data['page']='admin/jadwal/data';

		if($this->session->userdata('level')== 1){
			$data['jadwal_pesanan']=$this->M_jadwal->getad();
		}else if($this->session->userdata('level')== 2){
			$data['jadwal_pesanan']=$this->M_jadwal->get();
		}else if($this->session->userdata('level')== 4){
			$data['jadwal_pesanan']=$this->M_jadwal->gets();
		}
		
		$this->load->view('admin/template/base',$data);
	
		
	}
	public function tambah(){
		$data['page']='admin/jadwal/jadwal';
		$this->load->view('admin/template/base',$data);
	
	}
	public function aksi(){
		$data['page']='admin/jadwal/jadwal';
		$jadwal = $this->M_jadwal;
        $validation = $this->form_validation;
        $validation->set_rules($jadwal->rules());

        if ($validation->run()) {
            $jadwal->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
		
	
		$this->load->view('admin/template/base',$data);
	
	
	}
	public function hapus($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_jadwal->delete($id)) {
            redirect(site_url('Jadwal'));
        }
    }



}
