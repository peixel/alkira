<?php 

class User_model extends CI_Model {

	function save($nombre, $apellido, $cedula, $local, $ubicacion, $alquiler, $expensa, $garantia, $llave, $telefono, $email, $direccion, $observaciones, $fecha_limite, $fecha_contrat, $contrat)
	{
	    echo $contrat;
        $data = array(
           'nombre' => $nombre ,
           'apellido' => $apellido ,
           'cedula' => $cedula,
           'local' => $local,
           'ubicacion' => $ubicacion,
           'alquiler' => $alquiler,
           'expensa' => $expensa,
           'telefono' => $telefono,
           'email' => $email,
           'direccion' => $direccion,
           'observacion' => $observaciones,
           'fecha_fin' => $fecha_limite,
           'fecha_contrato' => $fecha_contrat,
           'contrat' => $contrat,
           'id_resp' => $this->session->userdata('id')
                   );
//print_r($data);
            $this->db->insert('contrat', $data); 
            return $this->db->insert_id();
            
		//$this->load->view('template');
	}
    
    function view(){
        $query = $this->db->get('contrat'); 
        return $query->result();
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */