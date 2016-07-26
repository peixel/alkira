<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	function index()
	{
	    echo "hola";
		$data['principal']=$this->load->view('home/login', null, true);
        $this->load->view('template', $data);
	}
    
    function control(){
        
        $centinela = new Centinel(FALSE);
        /*echo "hola";
        echo $_POST['login'];
        echo $_POST['pass'];*/
        if($centinela->login($_POST['login'], $_POST['pass'], 0))
        {
           //echo "entro";
            redirect('acces');
            
             
        }
        else{
            /*echo "no entro";
            echo $_POST['login'];*/
            redirect(base_url().'home');
        }
    }        
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */