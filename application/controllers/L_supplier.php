<?php 
 
class L_supplier extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('M_login_supplier');
		$this->load->model('M_supllier');
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("supplier/login"));
		// }
		if($this->session->userdata('level')== true){
            redirect('Dashboard/home');
        }
	}
 
	

	public function index(){
		$this->load->view('depan/conten/login_supplier');
	}
	function aksi_login(){
		
		$username = $this->input->post('username');
		$password = password_verify($this->input->post('password'),PASSWORD_BCRYPT);
		$where = array(
			 
			'username' => $username,
			'password' => $password,
		
			
			);
		$cek = $this->M_login_supplier->cek_login("suplayer",$where)->row_array();
		
		
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				
				'status' => "login",
				'level' => "2",
				'id'=>$cek['id_suplayer'],
				'id_desa'=>$cek['id_desa']
				);
 
			$this->session->set_userdata($data_session);
 
			echo "<script>
			window.location.href='" . base_url() . "dashboard';
			alert('Login Sukses');
			</script>";
		
		}else{
			echo "<script>
			window.location.href='" . base_url() . "L_supplier';
			alert('Login Gagal');
			</script>";
		
 
		}
	}
}
