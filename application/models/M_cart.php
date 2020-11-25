<?php

class M_cart extends CI_Model{

	
function cart($where,$table){		
	return $this->db->get_where($table,$where);
}

}
