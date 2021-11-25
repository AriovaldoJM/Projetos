<?php

class Leads_model extends CI_Model {
	public function __construct() {
		parent:: __construct();
	}

    public function getLeads(){
        return $this->db->get('leads')->result();
        
    }
    public function getUsuarioAdmin($email){
        $this->db->where('email_admin', $email);
        
        return $this->db->get('usuarios_admin')->row();
        
    }
}