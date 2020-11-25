<?php

class Registrasi extends CI_Controller{

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index(){

        $this->load->view('admin/user/Registrasi');
    }
}


