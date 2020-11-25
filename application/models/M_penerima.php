<?php

class M_penerima extends CI_Model{
    public function get(){
        return $this->db->get('penerima')->result();
    }
}