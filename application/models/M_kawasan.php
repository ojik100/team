<?php


class M_kawasan extends CI_Model{

    public function get(){
        return $this->db->get('desa')->result();
    }
    public function getkec(){
        return $this->db->get('kecamatan')->result();
    }
    public function getkab(){
        return $this->db->get('kabupaten')->result();
    }

}
