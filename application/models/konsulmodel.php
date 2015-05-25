<?php
/**
* 
*/
class Konsulmodel extends CI_Model
{
	
	public function get_quest(){

		$this->load->database();
		$this->db->select('*');
		$this->db->from('answer');
		$this->db->join('news','no_id=id_quest');
		$query=  $this->db->get();
		if($query->num_rows()==0)
		{
			return false;
		}
		return $query->result();
	} 
}
?>
