<?php



class Kurir extends CI_Controller{
	public function __construct()
    {
	
		parent::__construct();
		
		if($this->session->userdata('level')== false){
			redirect('home');
		}

        $this->load->model("M_kurir");
        $this->load->model("M_kurir");
        $this->load->library('form_validation');

   
    }
	public function index(){
		$data['page']='admin/kurir/kurir';
		$data['kurir']= $this->M_kurir->get();
		$this->load->view('admin/template/base',$data);
	}
		
	public function aksi_tambah(){
        $data['page']='admin/kurir/tambah';
        $kurir = $this->M_kurir;
        $validation = $this->form_validation;
        $validation->set_rules($kurir->rules());

        if ($validation->run()) {
            $kurir->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Kurir');
        }else{

		}
        $this->load->view('admin/template/base',$data);
}
public function edit($id = null)
{
	if (!isset($id)) redirect('kurir');
	$kurir = $this->M_kurir;
	$validation = $this->form_validation;
	$validation->set_rules($kurir->rules());

	if ($validation->run()) {
		$kurir->update();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
	}
	
	$data['kurir'] 	= $this->M_kurir->get();
	$data["kurir"] = $kurir->getById($id);
	if (!$data["kurir"]) show_404();
	$data['page']='admin/kurir/edit';
	$this->load->view('admin/template/base',$data);
	

} 
public function hapus($id=null)
{
	if (!isset($id)) show_404();
	
	if ($this->M_kurir->delete($id)) {
		redirect(site_url('Kurir'));
	}
}

}

