<?php 

	/**
	* 
	*/
	class Homepage extends CI_Controller
	{
		//start auth
		function __construct()
		{
			parent::__construct();
			$this->load->model('loginuser');
			$this->load->helper('form');

			
		}

		function login()
		{
			$this->load->library('form_validation');
			//This method will have the credentials validation
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			$password = $this->input->post('password');
			$rolelogin = $this->check_database($password);
			
			if($rolelogin == 'admin')
				redirect('homeadmin', 'refresh');
			if($rolelogin == 'user')
				redirect('homeuser', 'refresh');
			if($rolelogin == 'dokter')
				redirect('homedokter', 'refresh');
			if($this->session->userdata('logged_in')){
				//Field validation failed.  User redirected to login page
				//go to home bcuz failed
				echo site_url('homepage/home');
			}
			//specialize from role
			else
			{
				 //redirect to home page/give warning that the auth.thing is false,
				 redirect('homepage', 'refresh');

			}

		}

		function check_database($password)
		{
			//Field validation succeeded.  Validate against database
			$username = $this->input->post('username');
			//query the database
			$result = $this->loginuser->login($username, $password);
			$this->session->sess_destroy();
			if($result)
			{
				$sess_array = array();
				foreach($result as $row)
				{
					$sess_array = array(
						'username' => $row->username,
						'full_name' => $row->full_name,
						'alamat' => $row->alamat,
						'kota' => $row->kota,
						'jenis_kelamin' => $row->jenis_kelamin,
						'email' => $row->email,
						'no_telepon' => $row->no_telepon,
						'role' => $row->role,
					);
					$this->session->set_userdata('logged_in', $sess_array);
					
					//echo  has_userdata('logged_in');
				}
				return $row->role;
			}
			else
			{
				 $this->form_validation->set_message('check_database', 'Invalid username or password');
				 return false;
		}
		//end auth
		}

		 function insertion()
		 {
		 	var_dump($_POST);
			$data = array(
			   'username' => $_POST["username"] ,
			   'password' => md5($_POST["password"]) ,
			   'full_name' =>  $_POST["fullname"]  ,
			   'alamat' =>  $_POST["alamat"]  ,
			   'kota' => $_POST["kota"]  ,
			   'jenis_kelamin' => 'L'  ,
			   'email' => $_POST["email"]  ,
			   'no_telepon' => $_POST["no_telp"]  ,
			   'role' => 'user' ,

			);
			$this->db->insert('user', $data); 
			redirect('/homepage/home/');
		 }
		public function index()
		{
			$this->load->view('project/header');
			$this->load->view('project/index');
		}

		public function home()
		{
			
			$this->load->view('project/header');
			$this->load->view('project/navbar');
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