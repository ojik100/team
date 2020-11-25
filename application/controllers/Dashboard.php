<?php



class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("supplier/login"));
		// }
		$this->load->model('M_barang');
		$this->load->model('M_user');
		$this->load->model('M_supllier');
		$this->load->model('M_pesanan');
		
	}
    public function index(){
	
        // $data['page']='admin/dashboard';
		$this->load->view('admin/login');
	}
	public function supadmin(){
	
        
		$this->load->view('admin/supadmin');
	}
	public function home(){
		if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
		
		}else if($this->session->userdata('level')== 1){
		$where = $this->session->userdata('id_desa');
		$data['barang']= $this->M_barang->tottal($where);
		$data['suplayer']= $this->M_supllier->tottal($where);
		$data['user']= $this->M_user->tottal();
		$data['order']= $this->M_pesanan->tottal($where);
		
	   }else if($this->session->userdata('level')== 4){
			
			$data['barang']= $this->M_barang->jumlah_data();
			$data['suplayer']= $this->M_supllier->getad();
			$data['user']= $this->M_user->tottal();
			$data['order']= $this->M_pesanan->tottalad();
		}
		else if($this->session->userdata('level')== 2){
			$where = $this->session->userdata('id');
			$data['barang']= $this->M_barang->tottals($where);
			$data['suplayer']= $this->M_supllier->tottal($where);
			$data['user']= $this->M_user->tottal();
			$data['order']= $this->M_pesanan->tottal($where);
		}

		else if($this->session->userdata('level')== 5){
			$where = $this->session->userdata('id');
			$data['barang']= $this->M_barang->tottals($where);
			$data['suplayer']= $this->M_supllier->tottal($where);
			$data['user']= $this->M_user->tottal();
			$data['order']= $this->M_pesanan->tottal($where);
		}

        $data['page']='admin/dashboard';
		$this->load->view('admin/template/base',$data);
	}
	
	
	
}
