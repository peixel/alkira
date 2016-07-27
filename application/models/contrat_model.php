<?php 

class Contrat_model extends CI_Model {

	function save()
	{
		//$this->load->view('template');
	}
    
    function pay($id, $date){
        $data = array(
               
               'fecha_pago' => $date
            );

            $this->db->where('id', $id);
            $this->db->update('contrat', $data); 
    }
    
    function view(){
        $query = $this->db->get('contrat'); 
        return $query->result();
    }
    
    function del($id){
        $this->db->delete('contrat', array('id' => $id)); 
    }
    
    function ultima_fecha($id){
        $this->db->select('fecha_pago');
        $query = $this->db->get_where('contrat', array('id' => $id));  
        return $query->result();
     }
    
    function contrat_fecha($id){
        $this->db->select('fecha_contrato');
        $query = $this->db->get_where('contrat', array('id' => $id));  
        return $query->result();
     }
    
   
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */