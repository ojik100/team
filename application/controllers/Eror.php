<?php



class Eror extends CI_Controller{
    public function index(){
        $data['heading'] = "ANDA TIDAK PUNYA AKSES KE SINI !!!";
        $data['message'] = "Silahkan hubungi admin";
       $this->load->view('errors/html/error_404',$data);
    }
}