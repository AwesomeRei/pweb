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
			$this->load->view('project/konsul_main',$data);
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
	}

?>