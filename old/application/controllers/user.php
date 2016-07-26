<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
         parent::__construct();
        if(!$this->centinel->check(2, TRUE)){
            redirect('home');
        }
        
               /* print_r($this->centinel->check(0, TRUE));
        
        echo $this->session->userdata('login');;*/
        
        $this->load->model('user_model');
    }

	function index()
	{
	    $data['welcome_msg']="Bienvenido:".$this->session->userdata('login');
        $data['principal']=$this->load->view('user/contrat_frm', null, true);
        $this->load->view('template_user', $data);
	    
    }
    
    function save(){
        
        $fecha_contrat=date("Y-m-d");
        
        $porcion=explode("/", $_POST['fecha_limite']);
        //print_r($porcion);
        $fecha_limite = $porcion[2]."-".$porcion[0]."-".$porcion[1];
        
        $contrat_txt=$this->contrat_replace($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['local'], $_POST['ubicacion'], $_POST['alquiler'], $_POST['expensa'], $_POST['garantia'], $fecha_limite, $fecha_contrat);
        //echo $contrat_txt;
        $this->user_model->save($_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['local'], $_POST['ubicacion'], $_POST['alquiler'], $_POST['expensa'], $_POST['garantia'], $_POST['llave'], $_POST['telefono'], $_POST['email'], $_POST['direccion'],  $_POST['observaciones'],  $fecha_limite, $fecha_contrat, $contrat_txt);
        
        redirect(base_url()."user");   
    }
    
    function contrat(){
        
        $data['contrats']=$this->user_model->view();
        
        $data['welcome_msg']="Bienvenido:".$this->session->userdata('login');
        $data['principal']=$this->load->view('user/list_user', $data, true);
        $this->load->view('template_user', $data);
        
    }
    
    function contrat_replace($nombre, $apellido, $cedula, $local, $ubicacion,  $alquiler, $expensa, $garantia , $fecha_limite, $fecha_contrat){
        
        $contrat=file_get_contents(base_url()."contrato/alkira_1.txt");
        
        $total=$alquiler+$expensa;
        //echo $fecha_limite;
        $fecha_fin=explode("-", $fecha_limite);
        //print_r($fecha_fin);
        $fecha_fin= $fecha_fin[2]." de ". $this->literal->mes_ltr($fecha_fin[1])." de ".$fecha_fin[0] ;
        //echo $fecha_contrat;
        $fecha_contrat=explode("-", $fecha_contrat);
        $fecha_contrat= $fecha_contrat[2]." de ". $this->literal->mes_ltr($fecha_contrat[1])." de ".$fecha_contrat[0] ;
        
        $contrat=str_replace('@INQUILINO', $nombre." ".$apellido, $contrat); 
        $contrat=str_replace('@CI_INQUILINO', $cedula, $contrat); 
        $contrat=str_replace('@LOCAL', $local, $contrat); 
        $contrat=str_replace('@UBICA', $ubicacion, $contrat); 
        $contrat=str_replace('@ALQUILER', $alquiler, $contrat); 
        $contrat=str_replace('@ALQUILER_LITERAL', $this->literal->number_to_letter($total), $contrat); 
        $contrat=str_replace('@GARANTIA', $garantia, $contrat); 
        $contrat=str_replace('@ALQUILER_LITERAL', $this->literal->number_to_letter($garantia), $contrat); 
        $contrat=str_replace('@ALQUILER_LITERAL', $this->literal->number_to_letter($garantia), $contrat); 
        $contrat=str_replace('@FECHA_FIN', $fecha_fin, $contrat); 
        $contrat=str_replace('@FECHA_IN', $fecha_contrat, $contrat); 
        $contrat=str_replace('@FECHA_ACTUAL', $fecha_contrat, $contrat); 
        
        return $contrat;
    }
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */