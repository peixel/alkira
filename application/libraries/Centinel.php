<?if(!defined('BASEPATH')) 
    exit('No direct script access allowed');
    
    
/*
 * que chingaos hace esto
 * 1.- verifica sesion
 * 2.- login
 * 3.- logout
 * 4.- 
 * 
 * */
 
 /**
  * 
  */
  
  
  
 class Centinel  {
     
     
    var $_id = 0;
    var $_login = "";
    var $_pass = "";
    var $_acces = "";
    
    var $_auth = FALSE;
     
     
     function Centinel($auto=true) {
         
         //edirect(base_url());
         //echo $auto;
         if($auto){
             
             $CI =& get_instance();
             
             if($this->login($CI->session->userdata('login'), $CI->session->userdata('pass'))){
                 
                 $this->_id = $CI->session->userdata('id');
                 $this->_login = $CI->session->userdata('login');
                 $this->_pass = $CI->session->userdata('pass');
                 $this->_acces = $CI->session->userdata('acces');
                 
             }
             
         }
         
     }
     
     
     function login($login = "", $pass = ""){
         
         if(empty($login)||empty($pass))
            return FALSE;
         
         $CI =& get_instance();
         
         $CI->load->model('centinel_model');
         $user=$CI->centinel_model->control($login,$pass);
          //print_r($user);
         if($user->num_rows()==1){
              
                $row = $user->row();
                
                $CI->session->set_userdata('id', $row->id);
                $this->_id = $row->id; 
                $CI->session->set_userdata('login', $login);
                $this->_login = $login;
                $CI->session->set_userdata('pass', $pass);
                $this->_pass = $row->pass;
                $CI->session->set_userdata('acces', $row->acces);                
                $this->_nivel = $row->acces;
                
                $this->_auth = TRUE;
                
                return TRUE;
            }
            else
            {
                $this->_auth = FALSE;
                $this->logout();
                
                return FALSE;
            }
     }
     
     function check($nivel , $estricto ){
        if(!$this->_auth)
            return FALSE;
            
        if($estricto)
        {
            if($nivel == $this->_nivel)
                return TRUE;
            else
                return FALSE;
        }
        else
        {
            if($nivel <= $this->_nivel)
                return TRUE;
            else
                return FALSE;               
         }
    }   
     
     function logout(){
     
            $CI =& get_instance();
            $CI->session->sess_destroy();
            $this->_auth = FALSE;           
        }
                 
 }
 
