<?php



class L_user extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('M_login_user');
	}
    
    public function index(){
        $this->load->view('depan/conten/login_user');
    }
	
	function aksi_login(){
		$nik = $this->input->post('nik');
		$password =password_verify($this->input->post('password'),PASSWORD_BCRYPT);  
	
		$where = array(
			'nik' => $nik,
			'password' =>$password,	
			);
		$cek = $this->M_login_user->cek_login("user",$where)->row_array();
		if($cek > 0){
 
			$data_session = array(
				'nik' => $nik,
				'status' => "login",
				'level'=>3,
				'id'=>$cek['id'],
				
				);
 
			$this->session->set_userdata($data_session);
				
	
			echo "<script>
			window.location.href='" . base_url() . "Home';
			alert('Login Sukses');
			</script>";
 
		}else{
			echo "<script>
			window.location.href='" . base_url() . "L_user';
			alert('Login Gagal');
			</script>";

		}
	}
	function logout(){
		$this->session->sess_destroy();
		
		redirect(base_url('user'));
	}
}
