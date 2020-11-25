<?php



class Harga extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("M_harga");
      
		$this->load->model('M_desa');
		
		$this->load->model('M_kawasan');
        $this->load->library('form_validation');
		
	}
	public function index(){
		$data['page']='admin/harga/index';
		$data['harga']=$this->M_harga->get_data();
		$this->load->view('admin/template/base',$data);

	}
	function edit($id){
		$data['page']='admin/harga/edit';
		$where = array('id' => $id);
		$data['harga'] = $this->M_harga->edit_data($where,'harga_sembako')->result();
		$this->load->view('admin/template/base',$data);
	}
	public function cek(){
		$jumlah_data = $this->M_harga->jumlah_data();
		$this->load->library('pagination');
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$config['base_url'] = base_url().'Harga/cek';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 20;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['harga_sembako']=$this->M_harga->getAl($config['per_page'],$from);
	
		$data['desa']= $this->M_desa->get_data();
		$data['kawasan']= $this->M_kawasan->get();
		$data['harga']=$this->M_harga->get_data();
		$this->load->view('depan/conten/cek_harga',$data);

	}
	public function Cari(){
		$data['desa']= $this->M_desa->get_data();
		$data['kawasan']= $this->M_kawasan->get();
			$keyword = $this->input->post('keyword');
			$data['harga']=$this->M_harga->get_product_keyword($keyword);
			$this->load->view('depan/conten/cek_harga_view',$data);
		}
	
	public function tambah(){
		$data['page']='admin/harga/tambah';
		$this->load->view('admin/template/base',$data);
	}
	
	public function aksi(){
	
			$nama_barang = $this->input->post('nama_barang');
			$harga = $this->input->post('harga');
			$keterangan = $this->input->post('keterangan');
		
		
	 
			$data = array(
				'nama_barang' => $nama_barang,
				'harga' => $harga,
				'keterangan' => $keterangan,
				
				);
			$this->M_harga->input_data($data,'harga_sembako');
			echo "<script>
			window.location.href='" . base_url() . "Harga';
			alert('Sukses');
			</script>";
			
		
	}
	public function aksi_edit(){
		$id = $this->input->post('id');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'keterangan' => $keterangan
			
			);

			$where = array(
				'id'=> $id
			);
		$this->M_harga->edit_data($data,'harga_sembako');
		echo "<script>
		window.location.href='" . base_url() . "Harga';
		alert('Sukses');
		</script>";
		
	
}
	public function hapus($id){
		
	$where = array('id' => $id);
	$this->M_harga->hapus_data($where,'harga_sembako');
	echo "<script>
			window.location.href='" . base_url() . "Harga';
			confirm('Anda Yakin?');
			</script>";
	}
}
