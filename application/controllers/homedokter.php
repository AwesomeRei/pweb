<?php 

	/**
	* 
	*/
	class homedokter extends CI_Controller
	{
		//start auth
		function __construct()
		{
			parent::__construct();
			//$this->load->model('loginuser');
			//$this->load->helper('form');

		
		}

		public function index()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar_dokter');
			$this->load->view('project/main_slider_artikel');
			$this->load->view('project/footer');
		}

		public function artikel()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar_dokter');
			$this->load->view('project/artikel_main_dokter');
			$this->load->view('project/footer');
		}
		public function artikel_view()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar_dokter');
			$this->load->view('project/artikel_view_dokter');
			$this->load->view('project/footer');
		}
		public function konsultasi()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar_dokter');
			$this->load->view('project/konsul_admin');
			$this->load->view('project/footer');
		}
		public function logout(){
			session_destroy();
			redirect('homepage', 'refresh');
		}
	}

?>