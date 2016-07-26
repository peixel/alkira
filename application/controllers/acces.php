<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acces extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		//($this->session->userdata('acces'));
        echo "acces";
        switch ($this->session->userdata('acces')) {
            case 0:
                //echo "i es igual a 0";
                redirect('admin');
                break;
            case 1:
                //echo "i es igual a 1";
                redirect('vendedor');
                break;
            case 2:
                /*echo "i es igual a 2";
                exit;*/
                redirect('user');
                break;
        }
        
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */