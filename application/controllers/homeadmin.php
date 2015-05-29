<?php 

	/**
	* 
	*/
	class homeadmin extends CI_Controller
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
			$this->load->view('project/navbar_admin');
			$this->load->view('project/main_slider_artikel');
			$this->load->view('project/footer');
		}

		public function buat_artikel(){
			$this->load->library('ckeditor');
			$this->ckeditor->basePath = base_url().'asset/ckeditor/';
			$this->ckeditor->config['toolbar'] = array(
			                array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
			                                                    );
			$this->ckeditor->config['language'] = 'it';
			$this->ckeditor->config['width'] = '730px';
			$this->ckeditor->config['height'] = '300px';
			//sampe sini

			$this->load->view('project/header');
			$this->load->view('project/navbar_admin');
			$this->load->view('project/artikel_admin');
			$this->load->view('project/footer');
		}
		public function pertanyaan(){
			$this->load->view('project/header');
			$this->load->view('project/navbar_admin');
			$this->load->view('project/konsul_admin');
			$this->load->view('project/footer');
		}
		public function tambah_donatur(){
			$this->load->view('project/header');
			$this->load->view('project/navbar_admin');
			$this->load->view('project/add_donatur');
			$this->load->view('project/footer');
		}
		public function logout(){
			session_destroy();
			redirect('homepage', 'refresh');
		}
		
	}

?>