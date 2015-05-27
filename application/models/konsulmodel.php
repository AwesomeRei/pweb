<?php
/**
* 
*/
class Konsulmodel extends CI_Model
{
	
	public function get_quest(){

		$this->load->database();
		$this->db->select('*');
		$this->db->from('jawaban');
		$this->db->join('konsultasi','konsultasi.id_konsultasi=jawaban.ID_konsultasi');
		$query=  $this->db->get();
		if($query->num_rows()==0)
		{
			return false;
		}
		return $query->result_array();
	} 
}
?>
