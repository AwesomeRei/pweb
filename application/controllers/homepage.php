<?php 
	/**
	* 
	*/
	//session_start();
	class Homepage extends CI_Controller
	{
		public function __construct(){
			parent::__construct();

			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('login_database');
		}

		public function index()
		{
			$this->load->view('project/header');
			$this->load->view('project/index');
		}

		public function home()
		{
			$this->load->view('project/header');
			$this->load->view('project/navbar_logged');
			$this->load->view('project/main_slider_artikel');
			$this->load->view('project/footer');
		}
		public function konsul() {

			$this->load->Model('konsulmodel');
			
			$data= array();
			$category = $this->konsulmodel->get_quest();

			$result = array();
			foreach ($category as $cat) {
				if($cat['ID_KONSULTASI'] && array_key_exists($cat['ID_KONSULTASI'], $result))
				{
					$result[$cat['ID_KONSULTASI']]['isi'][]= $cat;
				}
				else
				{
					$result[$cat['ID_KONSULTASI']] =$cat;
				}
			}
			$data['result']=$result;
			$this->load->view('project/header');
			$this->load->view('project/navbar_logged');
			$this->load->view('project/konsul_main');
			$this->load->view('project/footer');
		}
		public function artikel()
		{
			//nanti di list semua
			$this->load->view('project/header');
			$this->load->view('project/navbar_logged');
			$this->load->view('project/artikel_main');
			$this->load->view('project/footer');
		}

		public function artikel_alone(){
			//ini nanti ada yang dipassing
			$this->load->view('project/header');
			$this->load->view('project/navbar_logged');
			$this->load->view('project/artikel_view');
			$this->load->view('project/footer');
		}

		public function artikel_admin(){
			//ini untuk ck editor
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
		public function konsul_admin(){
			$this->load->view('project/header');
			$this->load->view('project/navbar_admin');
			$this->load->view('project/konsul_admin');
			$this->load->view('project/footer');
		}
		public function event(){
			$this->load->view('project/header');
			$this->load->view('project/navbar_admin');
			$this->load->view('project/event');
			$this->load->view('project/footer');
		}
		public function Add_Donatur(){
			$this->load->view('project/header');
			$this->load->view('project/navbar_admin');
			$this->load->view('project/add_event');
			$this->load->view('project/footer');
		}
	}

?>