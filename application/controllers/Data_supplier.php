<?php


class Data_supplier extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
		$this->load->model('M_data_suplayer');
		$this->load->model('M_desa');
		$this->load->model('M_kawasan');
        $this->load->library('form_validation');
    //     if($this->session->userdata('level')== 1){
    //       redirect('dashboard');
    //   }else if($this->session->userdata('level')== 2){
    //     redirect('dashboard');
    //   }
    // }
    }
	public function index(){
		
		$jumlah_data = $this->M_data_suplayer->jumlah_data();
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
		$config['base_url'] = base_url().'data_supplier/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 20;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['sup']=$this->M_data_suplayer->getAl($config['per_page'],$from);
	
		$data['desa']= $this->M_desa->get_data();
		$data['kawasan']= $this->M_kawasan->get();
	
		$data['suplayer']= $this->M_data_suplayer->get_data();

		$data['total']=$this->db->get('suplayer')->num_rows();
		$data['totals']=$this->db->query('SELECT * FROM barang JOIN suplayer ON barang.id_suplayer = suplayer.id_suplayer where barang.id_suplayer')->num_rows();
		
		$this->load->view('depan/conten/data_supplier',$data);
	
	}
	public function Cari(){
		$data['desa']= $this->M_desa->get_data();
		$data['kawasan']= $this->M_kawasan->get();
			$keyword = $this->input->post('keyword');
			$data['sup']=$this->M_data_suplayer->get_product_keyword($keyword);
			$this->load->view('depan/conten/data_supplier_view',$data);
		}


}
