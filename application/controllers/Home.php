<?php



class Home extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("M_barang");
        $this->load->model("M_desa");
        $this->load->model('M_supllier');
        $this->load->model('M_kategori');
		$this->load->model('M_kawasan');
		$this->load->model('M_harga');
        
        $this->load->library('form_validation');
    //     if($this->session->userdata('level')== 1){
    //       redirect('dashboard');
    //   }else if($this->session->userdata('level')== 2){
    //     redirect('dashboard');
    //   }
    // }
    }
    public function index(){
      $jumlah_data = $this->M_barang->jumlah_data();
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
      $config['base_url'] = base_url().'Home/index';
      $config['total_rows'] = $jumlah_data;
      $config['per_page'] = 8;
      $from = $this->uri->segment(3);
      $this->pagination->initialize($config);
  
      $data['barang']=$this->M_barang->getAl($config['per_page'],$from);
      $data['desa']= $this->M_desa->get_data();
      $data['sup']= $this->M_supllier->get();
	  $data['kat']=$this->M_kategori->get_data();
	  $data['harga']=$this->db->query('select * from harga_sembako')->result();
      $data['kawasan']= $this->M_kawasan->get();
      $data['suplayer']=$this->db->get('suplayer')->num_rows();
      $data['pesan']=$this->db->get('user')->num_rows();
      $data['barangt']=$this->db->get('barang')->num_rows();
	  $data['user']=$this->db->get('user')->num_rows();
	  $this->load->view('depan/conten/home',$data);
	  
      
      }
      
	
	public function cekout()
{
	$this->load->view('web/cekout');
}
   public function cart(){
	$this->load->view('web/cart');
}


public function kategori($kategori){
	
	$this->load->model('M_kategori');
	// $where = array('id_kategori' => $id);
	$keyword = $this->input->post('keyword');
		$data['desa']= $this->M_desa->get_data();
		$data['sup']= $this->M_supllier->get();
		$data['kat']=$this->M_kategori->get_data();
   $data['barang']=$this->M_barang->get_product_keyword($keyword);
	$data['barang'] = $this->M_kategori->getById($kategori);
	$this->load->view('web/kategori',$data);
}
}
