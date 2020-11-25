<?php



class Login extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}function aksi_loginsup(){
		$username = $this->input->post('username');
		$password =password_verify($this->input->post('password'),PASSWORD_BCRYPT);  
		$where = array(
			'username' => $username,
			'password' => $password,
			
			);
		$cek = $this->m_login->cek_login("supadmin",$where)->row_array();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'level'=>4,
				
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
 
		}else{
			$this->session->set_flashdata('gagal', 'username anda salah');
			redirect(base_url("supadmin"));
		}
	}
	
	function aksi_login(){
		$username = $this->input->post('username');
		$password =$this->input->post('password');  
	$where = array(
			'username' => $username,
			'password' => $password,
			
			);
		$cek = $this->m_login->cek_login("admin",$where)->row_array();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'level'=>1,
				'id'=>$cek['id_admin'],
				'id_desa'=>$cek['id_desa']
				);
 
			$this->session->set_userdata($data_session);
			echo "<script>
			window.location.href='" . base_url() . "dashboard';
			alert('Login Sukses');
			</script>";
			
 
		}else{
			$this->session->set_flashdata('Gagal', 'Username anda salah');
			redirect(base_url("admin"));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		echo "<script>
			window.location.href='" . base_url() . "user';
			confirm('Anda Yakin? ');
			</script>";
		
	}
}
