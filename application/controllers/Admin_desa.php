<?php


class Admin_desa extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_admin");
        $this->load->model("M_desa");
        $this->load->library('form_validation');

        if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }else if($this->session->userdata('level')== 1){
            redirect('Dashboard');
        }else if($this->session->userdata('level')== 2){
            redirect('Dashboard');
        }
    }
    public function index(){

	
        $data['admin']= $this->M_admin->get();
        $data['page']='admin/admin_desa/admin_desa';
        $this->load->view('admin/template/base',$data);
    }
    public function create(){
        $data['desa']= $this->M_desa->get_data();
        $data['page']='admin/admin_desa/create';
        $admin = $this->M_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin_desa');
        }
        $this->load->view('admin/template/base',$data);
    }

    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('Barang/edit');
    //     $barang = $this->M_barang;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($barang->rules());

    //     if ($validation->run()) {
    //         $barang->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }
        
    //     $data['kategori'] 	= $this->M_kategori->get_data();
    //     $data["barang"] = $barang->getById($id);
    //     if (!$data["barang"]) show_404();
    //     $data['page']='admin/barang/edit';
	// 	$this->load->view('admin/template/base',$data);
		
	
    // }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();
        
    //     if ($this->M_barang->delete($id)) {
    //         redirect(site_url('Barang'));
    //     }
    // }


    // public function pdf(){
    //     $this->load->library('dompdf_gen');
     
    //     if($this->session->userdata('level')==1){
    //         $where= $this->session->userdata('id_desa');

    //         $data['barang']=$this->M_barang->getAll($where);
    //     }else{
    //         $where= $this->session->userdata('id');

            
    //         $data['barang'] = $this->M_barang->getbysup($where);       
       
    //     }

    //     $this->load->view('admin/barang/laporan',$data);

    //     $paper_size =' A4';
    //     $orientation = 'landscape';
    //     $html = $this->output->get_output();
    //     $this->dompdf->set_paper($paper_size,$orientation);

    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render();
    //     $this->dompdf->stream("laporan_barang.pdf",array('attachment'=> 0));
    // }

   

    
}
