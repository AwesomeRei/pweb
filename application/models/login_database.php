<?php 
	 class Login_Database extends CI_Model
	 {
	 	
	 	public function login(){
	 		$this->db->select('*');
	 		$this->db->from('user');
	 		$query = $this->db->get();
	 		if ($query->num_rows() == 1) {
				return true;
				} else {
				return false;
			}
	 	}
	 } 

?>