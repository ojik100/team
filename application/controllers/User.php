<?php



class User extends CI_Controller{
	public function __construct()
    {
		parent::__construct();
		$this->load->model('M_user');
		$this->load->library('form_validation');
		if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')==2){
            redirect('404');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }
	
	}
	public function index(){

		$data['page']='admin/user/user';
		$data['user']=$this->M_user->getall();
		$this->load->view('admin/template/base',$data);
	
		
		
	}
	public function detail($id){
		
		
		$data['page']='admin/user/detail';
		$data['user']=$this->M_user->getById($id);
		$this->load->view('admin/template/base',$data);
	
		
		
	}
	function status($id)
	{
		$data['page']='admin/user/aktif';
			$where = array('id' => $id);
			$data['user'] = $this->M_user->edit_data($where,'user')->result();
			$this->load->view('admin/template/base',$data);
	}function status_update(){
		
		$id = $this->input->post('id');
		$aktif = $this->input->post('aktif');
		$data = array(
			'verified' => $aktif,
			
			
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->M_user->update_data($where,$data,'user');
		redirect('User/index');
	}
	
	
	
 public function create(){
		$data['page']='admin/user/create';
		$user = $this->M_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			
        }
		
	
		$this->load->view('admin/template/base',$data);
	
		
		
	}
	

	public function edit($id = null)
    {
        if (!isset($id)) redirect('user');
       
        $user = $this->M_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        $data['page']='admin/user/edit';
		$this->load->view('admin/template/base',$data);
		
	
	}
	
    



	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_user->delete($id)) {
            redirect(site_url('User'));
        }
	}
	
	
}
