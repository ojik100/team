<?php 
 
class L_bumdes extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('M_daftar_bumdes');
		$this->load->model('M_desa');
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
		$this->load->view('depan/conten/login_bumdes');
	}
	public function daftar(){
		
		$data['desa'] = $this->M_desa->get_data_desa();
		$this->load->view('depan/conten/daftar_bumdes',$data);
	}
	public function aksi_daftar(){
		//$this->form_validation->set_rules('email', 'Email','trim|required|valid_email|is_unique[suplayer.email]',[
		//	'required' => 'harus di isi'
		//]);
		//$this->form_validation->set_rules('username', 'Username','trim|required|is_unique[suplayer.username]');
	   

		  // if($this->form_validation->run()== false){
			//   $this->session->set_flashdata('gagal', 'email sudah di gunakan');
			  // redirect('Supplier_daftar');
		   //}else{
		   $nama = $this->input->post('nama');
		   $bumdes = $this->input->post('bumdes');
		   $username = $this->input->post('username');
		   $alamat = $this->input->post('alamat');
		   $id_desa = $this->input->post('id_desa');
		   $kontak = $this->input->post('kontak');
		   $email = $this->input->post('email');
		   $password =md5($this->input->post('password'));
	   
	
		   $data = array(
			   'nama' => $nama,
			   'bumdes' => $bumdes,
			   'username' => $username,
			   'alamat' => $alamat,
			   'id_desa' => $id_desa,
			   'kontak' => $kontak,
			   'email' => $email,
			   'password' =>$password
			   );
		   $this->M_daftar_bumdes->input_data($data,'suplayer');
		   echo "<script>
		   window.location.href='" . base_url() . "L_bumdes';
		   alert('Daftar Akun Sukses');
		   </script>";
		   }
		   function aksi_login(){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$where = array(
				'username' => $username,
				'password' => $password,
				);
			$cek = $this->M_login_supplier->cek_login("suplayer",$where)->row_array();
			if($cek > 0){
	 
				$data_session = array(
					'nama' => $username,
					'status' => "login",
					'level' => "5",
					'bumdes'=>"1",
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
				window.location.href='" . base_url() . "L_bumdes';
				alert('Login Gagal');
				</script>";
			
	 
			}
	}
}
