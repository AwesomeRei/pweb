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

			$this->load->Model('konsulmodel');

			$data= array();
			$ans_list = $this->konsulmodel->get_quest();
			if($ans_list){
				$question = array();
				$ans_by_question = array();

				foreach ($ans_list as $answer) 
				{
					$question_id = $answer->no_id;
					$question_title = $answer->title;

					if(array_key_exists($question_id,$question))
					{
						$question[$question_id]=$question_title;
					}
					if(array_key_exists($question_id,$ans_by_question))
					{
						$ans_by_question[$question_id]=array();
					}

					$ans_by_question[$question_id][]=$answer;
				}
				$data['title']=$question;
				$data['ans_by_question']=$ans_by_question;
			}

			$this->load->model('konsulmodel');
			$data['main_content'] = 'konsul'; 
			echo "----------";
			var_dump($data);
			echo "----------";
			var_dump($ans_list);
			echo "----------";
			var_dump($ans_by_question);
			echo "----------";
			var_dump($question);
						
			$this->load->view('project/header');
			$this->load->view('project/navbar_logged');
			$this->load->view('project/konsul_main',$data);
			$this->load->view('project/footer');
		}
	}

?>