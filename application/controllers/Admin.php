<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }
	}
 
	function index(){
		$data['page']='admin/dashboard';
		$this->load->view('admin/template/base',$data);
	}
}
