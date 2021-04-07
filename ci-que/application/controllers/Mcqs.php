<?php
defined('BASEPATH') OR exit('direct script access allowed');

class Mcqs extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->model('mcq');
	$this->load->database();
	$this->load->helper('url_helper');
	$this->load->helper('url');
	$this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
	}

	public function index($page="home")
	{
		if(! file_exists(APPPATH.'views/'.$page.'.php'))
		{
			show_404();
		}
		$data['title'] = ucfirst($page);

		if($this->input->server("REQUEST_METHOD")==="POST")
		{	
        	$email= $this->input->post("email");
			$password = $this->input->post("password");
			$user = $this->mcq->login_data($email,$password);
			$this->load->library('session');
			if($user)
			{
            	$userdata = array(
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email
            	);
            $this->session->set_userdata($userdata);
			$this->session->set_flashdata('message', 'success ');
            redirect('mcqs/questions');
			}
			else
			{
			$this->session->set_flashdata('message', 'Invalid email or password');
            redirect('mcqs/');
			}					
		}	
		$this->load->view($page,$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect('mcqs/');
	}

	public function questions($page="questions")
	{
		$data['title'] = ucfirst($page);

		$data['quest'] = $this->mcq->display_question(); 
		// $data['answ'] = $this->mcq->display_answer();
		$this->load->view($page,$data);
	} 	
}
?>