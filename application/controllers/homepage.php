<?php 
	/**
	* 
	*/
	class Homepage extends CI_Controller
	{
		
		public function index()
		{
			$this->load->view('template/header');
			$this->load->view('template/footer');
			
		}
	}
?>