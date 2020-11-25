<?php


class Info_desa extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('M_info');
        $this->load->model('M_kawasan');
		// if($this->session->userdata('level')== false){
        //     redirect('Home');
		// }
		
		///i love you niang 08-04-20

	}
    public function index(){
     $jumlah_data = $this->M_info->jumlah_data();
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
      $config['base_url'] = base_url().'info_desa/index';
      $config['total_rows'] = $jumlah_data;
      $config['per_page'] = 8;
      $from = $this->uri->segment(3);
      $this->pagination->initialize($config);
       $data['info']=$this->M_info->getin($config['per_page'],$from);
        $data['kawasan'] = $this->M_kawasan->get();
        $data['terbaru']= $this->M_info->getn();
		$this->load->view('depan/conten/blog',$data);
	}
	public function edit($id = null)
    {
        if($this->session->userdata('level')== 3){
            redirect('Home');
		}
        if (!isset($id)) redirect('info_desa/edit');
       
        $info = $this->M_info;
        $validation = $this->form_validation;
        $validation->set_rules($info->rules());

        if ($validation->run()) {
            $info->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('info_desa/info');
        }  
         $data["desa"] = $info->getById($id);
        if (!$data["desa"]) show_404();
        $data['page']='admin/info_desa/edit';
		$this->load->view('admin/template/base',$data);
    }
	public function tambah(){
        if($this->session->userdata('level')== 3){
            redirect('Home');
		}
		$data['page']='admin/info_desa/tambah';
		$this->load->view('admin/template/base',$data);		
    }
	public function info(){
        if($this->session->userdata('level')== 4){
            $data['info'] = $this->M_info->getsup();
        }else{
            $where= $this->session->userdata('id_desa');      
            $data['info'] = $this->M_info->getAll($where);
        }
        $data['page']='admin/info_desa/info';	
		$this->load->view('admin/template/base',$data);	
    }	
	public function delete($id=null)
    {
        if (!isset($id)) show_404();  
        if ($this->M_info->delete($id)) {
            redirect(site_url('info_desa/info'));
        }
    }
	public function baca($id){
        $data['info'] = $this->M_info->get($id);
        $data['terbaru']= $this->M_info->getn();
        $data['kawasan'] = $this->M_kawasan->get();
		$this->load->view('depan/conten/show_blog',$data);
	}
	public function simpan(){
         $data['page']='admin/info_desa/tambah';
        $info_desa = $this->M_info;
        $validation = $this->form_validation;
        $validation->set_rules($info_desa->rules());
        if ($validation->run()) {
            $info_desa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('info_desa/info');
        }
        $this->load->view('admin/template/base',$data);
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['info']=$this->M_info->get_info_keyword($keyword);
        $data['terbaru']= $this->M_info->getn();
        $data['kawasan'] = $this->M_kawasan->get();
        $this->load->view('depan/conten/hasil',$data);
    }
}
