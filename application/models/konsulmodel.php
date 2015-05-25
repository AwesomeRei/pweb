<?php
/**
* 
*/
class Konsulmodel extends CI_Model
{
	
	public function get_quest(){
		$query = $this->db->get('news');
		return $query->result();	
	} 
}
?>
