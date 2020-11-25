<?php




class Pesanan extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_pesanan");
        $this->load->library('form_validation');
        if($this->session->userdata('level')== false){
            redirect('Home');
        }

       
    }

    public function index(){
        if($this->session->userdata('level')== false){
            redirect('Home');
        }else if($this->session->userdata('level')== 3){
            redirect('Home');
        }else if($this->session->userdata('level')== 2){
            $where= $this->session->userdata('id');
           $data['pesanan']=$this->M_pesanan->getsup($where);
           
        }else if($this->session->userdata('level')== 1){
            $where= $this->session->userdata('id_desa');
            $data['pesanan']=$this->M_pesanan->get($where);
        }else if($this->session->userdata('level')== 4){
        
            $data['pesanan']=$this->M_pesanan->getAl();
        }
        
        $data['page']='admin/pesanan/data';
     
        $this->load->view('admin/template/base',$data);
       
        
    }

///////////userrrrrrrr
    public function proses(){
      
        $proses = $this->M_pesanan;
        $validation = $this->form_validation;
        $validation->set_rules($proses->rules());

        if ($validation->run()) {
            $proses->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Pesanan/status');
        }
      echo "gagal";
    }
///////proses user
    public function status(){
        $where= $this->session->userdata('id');

            
        $data['p'] = $this->M_pesanan->getbyuser($where);       
       
    //    foreach($data as $p){
    //             echo $p->status;
    //    }

    $this->load->view('web/status',$data);
    }

    public function edit($id){
        if (!isset($id)) redirect('Pesanan/edit');
       
        $pesanan = $this->M_pesanan;
        $validation = $this->form_validation;
        $validation->set_rules($pesanan->rules());

        if ($validation->run()) {
            $pesanan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('pesanan');
        }
        
       $data["pesanan"] = $pesanan->getById($id);
        if (!$data["pesanan"]) show_404(); 
        $data['page']='admin/Pesanan/tinjau';
        $this->load->view('admin/template/base',$data);
    }
}