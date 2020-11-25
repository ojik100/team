<?php

class Laporan extends CI_Controller{
    public function index(){
            
            $data['page']='admin/barang/v_laporan';
            $this->load->view('admin/template/base',$data);
        
    }

    public function perbulan(){

        if($this->session->userdata('level')== 1){
                $this->load->model('M_pesanan');
                $bulan = $this->input->post('bulan');
                $tahun = $this->input->post('tahun');
                $desa = $this->session->userdata('id_desa');
                $data['bulan']= $this->M_pesanan->lap_bulan($bulan,$tahun,$desa);  

        }else if($this->session->userdata('level')== 4){
        $this->load->model('M_pesanan');
         $bulan = $this->input->post('bulan');
         $tahun = $this->input->post('tahun');
        
         $data['bulan']= $this->M_pesanan->lap_bulans($bulan,$tahun); 
        }else if($this->session->userdata('level')== 2){
                $this->load->model('M_pesanan');
                 $bulan = $this->input->post('bulan');
                 $tahun = $this->input->post('tahun');
                 $sup = $this->session->userdata('id');
                
                 $data['bulan']= $this->M_pesanan->lap_bulansp($bulan,$tahun,$sup); }

        $data['page']='admin/barang/v_laporan_bulan';
        $this->load->view('admin/template/base',$data);
    
}

}
