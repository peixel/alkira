<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contrat extends CI_Controller {

    public function __construct(){
         parent::__construct();
        if(!$this->centinel->check(2, TRUE)){
            redirect('home');
        }
        
               /* print_r($this->centinel->check(0, TRUE));
        
        echo $this->session->userdata('login');;*/
        
        $this->load->model('user_model');
        $this->load->model('contrat_model');
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
    
    function pay($id){
        
        //$_POST['fecha'.$id]=$date;
        //recupero la ultima fecha de pago
        $ultima_fecha=$this->contrat_model->ultima_fecha($id);
        //recupero la fecha de contrato
        $fecha_contrato=$this->contrat_model->contrat_fecha($id);
        // ahora ponemos la fecha como la del contrato sumando un mes a la fecha de ultimo pago
        //$nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
        //$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
        //echo $ultima_fecha[0]->fecha_pago;
        //echo $fecha_contrato[0]->fecha_contrato;
        
         $fecha_actual=date("Y-m-d");
        //necesito la fecha del contrato con el mes actual para el pago
        $fecha_actual_array=explode('-', $fecha_actual);
        $fecha_contrat_porcion=explode("-", $fecha_contrato[0]->fecha_contrato);
        //concatenamos la fecha de contrato con el mes actual que es el que se esta pagando para que no varien los dias
        $fecha_pago_final=$fecha_contrat_porcion[0]."-".$fecha_actual_array[1]."-".$fecha_contrat_porcion[2];
        //hacemos update de la fecha de pago.
        $this->contrat_model->pay($id, $fecha_pago_final);
        //en teoria generamos el recibo para imprecion con dos copias
        
        // y ahi muere
        
        redirect(base_url()."user");
        
    }
    
    
    function del($id)
    {
        $this->user_model->del($id);
        redirect(base_url()."user/contrat");
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */