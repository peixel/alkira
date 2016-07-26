<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    

	public function index()
	{
		    
          
          
          //echo $this->literal->number_to_letter(425.4);
		//$this->load->view('welcome_message');
		
		$contrat=file_get_contents(base_url()."contrato/alkira_1.txt");
        
        $contrat=str_replace('@INQUILINO', "HEIDI CAMACHO", $contrat); 
        $contrat=str_replace('@LOCAL', "H7", $contrat); 
        
        echo $contrat;
        
	}
}
