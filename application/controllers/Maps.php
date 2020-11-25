<?php


class Maps extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('M_supllier');
        if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')==2){
            redirect('404');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }
	
	}
    public function index(){
        $data['page']='admin/maps/tes';
        if($this->session->userdata('level')== 1){
            $where= $this->session->userdata('id_desa');

            $data['sup']=$this->M_supllier->getall($where);
        }else if($this->session->userdata('level')== 4){
            $data['sup']=$this->M_supllier->get();
        }
        $this->load->view('admin/template/base',$data);
    }
}