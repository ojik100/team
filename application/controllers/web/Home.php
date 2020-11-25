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
		$this->load->library('form_validation');
		
		
    }
    public function index(){
		if($this->session->userdata('level')==false){
			redirect('user');
		}else{
			$where= $this->session->userdata('id_desa');

			$data['barang']=$this->M_barang->getAll($where);
			
		$data['page']='admin/template/conten';
	
		$this->load->view('web/template/home',$data);
		}
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['desa']= $this->M_desa->get_data();
		$data['sup']= $this->M_supllier->get();
		$data['kat']=$this->M_kategori->get_data();
		$data['kawasan']= $this->M_kawasan->get();
		$data['suplayer']=$this->db->get('suplayer')->num_rows();
		$data['pesan']=$this->db->get('user')->num_rows();
		$data['barangt']=$this->db->get('barang')->num_rows();
		$data['user']=$this->db->get('user')->num_rows();
        $data['barang']=$this->M_barang->get_product_keyword($keyword);
		// $data['page']='admin/template/hasil';
	
		$this->load->view('depan/conten/pencarian',$data);
	   }

	
	public function cekout()
{
	$this->load->view('web/cekout');
}
   public function cart(){
	
	$this->load->view('web/cart');
}
public function detail($id){
	
	$this->load->model('m_detail');
	
	$data['barang'] = $this->m_detail->cart($id);
	$data['kawasan']= $this->M_kawasan->get();
	
	$this->load->view('depan/conten/show',$data);
}
public function tambah_k($id){
	$barang = $this->M_barang->find($id);
	$data = array(
	   'id'      => $barang->id_barang,
	   'qty'     => 1,
	   'price'   => $barang->harga,
	   'name'    => $barang->nama_barang,
	   'id_s'   =>$barang->id_suplayer
	  
);

$this->cart->insert($data);
redirect('Home');
}

public function hapus_k(){
	$this->cart->destroy();
	redirect('Home');

}


public function kategori($id){
	$this->load->model('M_kategori');
	// $where = array('id_kategori' => $id);
	$keyword = $this->input->post('keyword');
		$data['desa']= $this->M_desa->get_data();
		$data['sup']= $this->M_supllier->get();
		$data['kat']=$this->M_kategori->get_data();
        $data['barang']=$this->M_barang->get_product_keyword($keyword);
	$data['barang'] = $this->M_kategori->getById($id);
	$this->load->view('web/kategori',$data);
}

}
