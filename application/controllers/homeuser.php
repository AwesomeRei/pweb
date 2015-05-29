<?php 

	/**
	* 
	*/
	class homeuser extends CI_Controller
	{
		//start autha
		function __construct()
		{
			parent::__construct();
			//$this->load->model('loginuser');
			//$this->load->helper('form');

		
		}

		public function index()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar_user');
			$this->load->view('project/main_slider_artikel');
			$this->load->view('project/footer');
		}
		public function artikel()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar_user');
			$this->load->view('project/artikel_main_user');
			$this->load->view('project/footer');
		}
		public function artikel_view()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar_user');
			$this->load->view('project/artikel_view_user');
			$this->load->view('project/footer');
		}
		public function konsultasi()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar_user');
			$this->load->view('project/konsul_main');
			$this->load->view('project/footer');
		}
		public function logout(){
			session_destroy();
			redirect('homepage', 'refresh');
		}
	}

?>