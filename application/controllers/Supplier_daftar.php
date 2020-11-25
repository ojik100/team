<?php



class Supplier_daftar extends CI_Controller{
	public function __construct()
    {
		parent::__construct();
		$this->load->model('M_desa');
		$this->load->library('form_validation');
			
	}
	public function index(){
		
		$data['desa'] = $this->M_desa->get_data_desa();
		$this->load->view('depan/conten/supplier_daftar',$data);	
	}
	public function aksi(){

	     $this->form_validation->set_rules('email', 'Email','trim|required|valid_email|is_unique[suplayer.email]',[
			 'required' => 'harus di isi'
		 ]);
		 $this->form_validation->set_rules('username', 'Username','trim|required|is_unique[suplayer.username]');
		

			if($this->form_validation->run()== false){
				$this->session->set_flashdata('gagal', 'email sudah di gunakan');
				redirect('Supplier_daftar');
			}else{
			$this->load->model('M_daftar_supplier');
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$alamat = $this->input->post('alamat');
			$id_desa = $this->input->post('id_desa');
			$kontak = $this->input->post('kontak');
			$email = $this->input->post('email');
			$password =  password_hash($this->input->post('password'),PASSWORD_BCRYPT);
		
	 
			$data = array(
				'nama' => $nama,
				'username' => $username,
				'alamat' => $alamat,
				'id_desa' => $id_desa,
				'kontak' => $kontak,
				'email' => $email,
				'password' =>$password
				);
			$this->M_daftar_supplier->input_data($data,'suplayer');
			echo "<script>
			window.location.href='" . base_url() . "L_supplier';
			alert('Daftar Akun Sukses');
			</script>";
		
			}
	}
}
