<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
         parent::__construct();
        if(!$this->centinel->check(0, TRUE)){
            redirect('home');
        }
        //$this->load->model('admin_model');
    }

	function index()
	{
	    
        $data['principal']=$this->load->view('admin/default');
        $this->load->view('template_admin', $data, TRUE);
	    
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */