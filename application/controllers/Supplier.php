<?php



class Supplier extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_supllier');
		if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')==2){
            redirect('404');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }
	
	
	}
	public function index(){
        $data['page']='admin/supplier/supplier';
        if($this->session->userdata('level')== 1){
            $where= $this->session->userdata('id_desa');

            $data['sup']=$this->M_supllier->getall($where);
        }else if($this->session->userdata('level')== 4){
            $data['sup']=$this->M_supllier->get();
        }
       
		$this->load->view('admin/template/base',$data);
	
		
		
    }
	
 public function create(){
		$data['page']='admin/supplier/create';
		$supllier = $this->M_supllier;
        $validation = $this->form_validation;
        $validation->set_rules($supllier->rules());

        if ($validation->run()) {
            $supllier->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
		
	
		$this->load->view('admin/template/base',$data);
	
		
		
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('Supplier/edit');
       
        $suplayer = $this->M_supllier;
        $validation = $this->form_validation;
        $validation->set_rules($suplayer->rules());

        if ($validation->run()) {
            $suplayer->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        
       
        $data["suplayer"] = $suplayer->getById($id);
        if (!$data["suplayer"]) show_404();
        $data['page']='admin/supplier/edit';
		$this->load->view('admin/template/base',$data);
		
	
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_supllier->delete($id)) {
            redirect(site_url('Barang'));
        }
    }
	
	
}
