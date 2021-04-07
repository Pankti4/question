<?php

class Mcq extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	} 

	public function login_data($email,$password)
	{
		$this->db->where('email', $email);
     	$this->db->where('password',$password);
        $query = $this->db->get('login');

       	if($query->num_rows() == 1) 
       	{
           return $query->row();
       	}

       return false;

	}

	public function display_question()
	{

		$query = $this->db->get('question');
		return $query->result();
	}

	public function display_answer()
	{
		$query = $this->db->get('answers');
		return $query->result();
	}

	public function display_questions()
	{
		$this->db->select('*');
		$this->db->from('question');
		$this->db->join('answers','answers.q_id = question.id');
		$query = $this->db->get();
		return $query->result();
	}
}