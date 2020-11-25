<?php

class User_daftar extends CI_Controller{
	public function __construct()
    {
		parent::__construct();
		$this->load->model("M_daftar_user");
		$this->load->library('form_validation');	
	}
	public function index(){
		$data['desa'] 	= $this->M_daftar_user->get_data();
		$data['kecamatan'] 	= $this->M_daftar_user->get_kec();
		$this->load->view('depan/conten/user_daftar',$data);	
	}
	public function aksi(){
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email|is_unique[user.email]',[
			'required' => 'harus di isi'
		]);
		$this->form_validation->set_rules('username', 'Username','trim|required|is_unique[user.username]');
	   

		   if($this->form_validation->run()== false){
			   $this->session->set_flashdata('gagal', 'email sudah di gunakan');
			   redirect('User_daftar');
		   }else{
			$this->load->model('M_daftar_user');
			$nama = $this->input->post('nama');
			$nik = $this->input->post('nik');
			$alamat = $this->input->post('alamat');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$jk = $this->input->post('jk');
			$desa = $this->input->post('desa');
			$kecamatan = $this->input->post('kecamatan');
			$status_nikah = $this->input->post('status_nikah');
			$telpon = $this->input->post('telpon');
			$email = $this->input->post('email');
			$password = password_hash($this->input->post('password'),PASSWORD_BCRYPT);
		
	 
			$data = array(
				'nama' => $nama,
				'nik' => $nik,
				'alamat' => $alamat,
				'tgl_lahir' => $tgl_lahir,
				'jk' => $jk,
				'desa' =>$desa,
				'kecamatan' =>$kecamatan,
				'status_nikah' => $status_nikah,
				'telpon' => $telpon,
				'email' => $email,
				'password' =>$password
				);
			$this->M_daftar_user->input_data($data,'user');
			echo "<script>
			window.location.href='" . base_url() . "L_user';
			alert('Daftar Akun Sukses');
			</script>";
			
		
	}
}
}
