<?php 

class Centinel_model extends CI_Model {

	function control($login, $pass)
	{
	    $this->db->where('login', $login);
        $this->db->where('pass', $pass);
        $query=$this->db->get('user');
        //print_r($query->result());
        return $query;
		//$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */