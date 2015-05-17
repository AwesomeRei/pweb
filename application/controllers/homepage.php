<?php 
	/**
	* 
	*/
	class Homepage extends CI_Controller
	{
		
		public function home()
		{
			$this->load->view('project/header');
			$this->load->view('template/head');
			$this->load->view('template/footer');	
		}
		public function index()
		{
			$this->load->view('project/header');
			$this->load->view('project/index');

		}
	}

?>