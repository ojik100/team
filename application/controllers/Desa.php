<?php


class Desa extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
		$this->load->model("M_desa");
		$this->load->model("M_kawasan");
		$this->load->library('form_validation');
		if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')== 2){
            redirect('!');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }
    }
	public function index(){
		$data['page']='admin/desa/lihat_data';
		$data['pihak_desa'] = $this->M_desa->get_data();
		$data['desa']=$this->M_kawasan->get();
	$this->load->view('admin/template/base',$data);
	}
	public function tambah(){
		
		$data['page']='admin/desa/tambah';
		$data['desa']=$this->M_kawasan->get();
	
		$this->load->view('admin/template/base',$data);
	
		
	}public function aksi_tambah()
	{ 
		
		$id_desa			= $this->input->post('id_desa');
		$alamat_kantor 		= $this->input->post('alamat_kantor');
		$telpon 			= $this->input->post('telpon');
		$email 				= $this->input->post('email');
		$kontak_kesehatan 	= $this->input->post('kontak_kesehatan');
		$kontak_keamanan	= $this->input->post('kontak_keamanan');
		$kontak_khusus	 	= $this->input->post('kontak_khusus');
		$kamtibmas	 	    = $this->input->post('kamtibmas');
		$sekdes	 	        = $this->input->post('sekdes');
		$kepala_desa	 	= $this->input->post('kepala_desa');
		$tentang_desa	 	= $this->input->post('tentang_desa');

		$data = array(
			'id_desa' 				 => $id_desa,
			'alamat_kantor' 		=> $alamat_kantor,	
			'telpon'				 => $telpon,
			'email'  				 => $email,
			'kontak_kesehatan' 		 => $kontak_kesehatan,
			'kontak_keamanan'  		 => $kontak_keamanan,
			'kepala_desa'  		     => $kepala_desa,
			'tentang_desa'  		 => $tentang_desa,
			'sekdes'  		         => $sekdes,
			'kamtibmas'  		     => $kamtibmas,
			'kontak_khusus'  		 => $kontak_khusus
			
		);
		$this->M_desa->input_data($data, 'pihak_desa');
		redirect('desa/index');	
	}
	function hapus($id)
	{
	
	$where = array('id_pihak_desa' => $id);
	$this->M_desa->hapus_data($where,'pihak_desa');
	redirect('desa');
}
function edit($id)
{
	$data['desa']=$this->M_kawasan->get();
	
		$where = array('id_pihak_desa' => $id);
		$data['pihak_desa'] = $this->M_desa->edit_data($where,'pihak_desa')->result();
		$data['page']='admin/desa/edit';
		$this->load->view('admin/template/base',$data);
}
public function update()
	{ 
		$id_pihak_desa 			= $this->input->post('id_pihak_desa');
		$id_desa 			= $this->input->post('id_desa');
		$alamat_kantor 			= $this->input->post('alamat_kantor');
		$telpon 			= $this->input->post('telpon');
		$email 				= $this->input->post('email');
		$kontak_kesehatan 	= $this->input->post('kontak_kesehatan');
		$kontak_keamanan	= $this->input->post('kontak_keamanan');
		$kontak_khusus	 	= $this->input->post('kontak_khusus');

		$data = array(
			'id_desa' 			 => $id_desa,
			'alamat_kantor' 				 => $alamat_kantor,
			'telpon'				 => $telpon,
			'email'  				 => $email,
			'kontak_kesehatan' 		 => $kontak_kesehatan,
			'kontak_keamanan'  		 => $kontak_keamanan,
			'kontak_khusus'  		 => $kontak_khusus
			
		);
		$where = array(
			'id_pihak_desa' => $id_pihak_desa
		) ;
		$this->M_desa->update_data($where,$data, 'pihak_desa');
		redirect('desa/index');	
	}
}
