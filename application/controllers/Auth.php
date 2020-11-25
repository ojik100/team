<?php


class Auth extends CI_Controller{
    public function index(){
        $data['page']='admin/supllier/data_barang';
        $this->load->view('admin/template/base',$data);
    }
}