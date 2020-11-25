<?php
Class Covid extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
     
       
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('M_kawasan');
    }

    // menampilkan data kontak
    function index(){
        $data['maps'] = json_decode($this->curl->simple_get('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'),true);
        $data['total'] = json_decode($this->curl->simple_get('https://api.kawalcorona.com/indonesia'));
        $data['indo'] = json_decode($this->curl->simple_get('https://api.kawalcorona.com/indonesia/provinsi/'));
        $data['kawasan']= $this->M_kawasan->get();
        $this->load->view('depan/conten/covid19',$data);
       
    }

  
    // insert data kontak
   

    // edit data kontak
    
}
