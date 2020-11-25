<?php 
 
class Akun extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		
	}
 
	function index(){
		$data['page']='admin/akun/index';
		if($where=$this->session->userdata('id_desa')){
			
			
			$data['suplayer']=$this->db->query('SELECT * from suplayer where id_desa')->result();
			$this->load->view('admin/template/base',$data);
		
        }else{
			$this->load->view('admin/template/base',$data);
        }
	
	}
}
