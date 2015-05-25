<?php 
	/**
	* 
	*/
	class Homepage extends CI_Controller
	{

		public function index()
		{
			$this->load->view('project/header');
			$this->load->view('project/index');
		}

		public function home()
		{
			$this->load->view('project/header');
			$this->load->view('project/navbar');
			$this->load->view('project/main');
			$this->load->view('project/footer');
		}
		public function konsul() {
			$this->load->model('konsulmodel');
			$data['news'] = $this->konsulmodel->get_quest(); 
			$this->load->view('project/header');
			$this->load->view('project/navbar_logged');
			$this->load->view('project/konsul_main',$data);
			$this->load->view('project/footer');
		}
	}

?>