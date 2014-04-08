<?php

class Form extends CI_Controller {

	public function index()
	{
		
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->load->view('myform');
		$this->form_validation->set_rules('username', 'não é numerico', 'required|alpha');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('float', 'não é flutuante', 'required|is_money');
		$this->form_validation->set_rules('numero', 'não é numerico', 'required|is_numeric');

		if ($this->form_validation->run() == FALSE)
		{
			echo "erro";//$this->load->view('myform');
		}
		else
		{
			echo "Ok";//$this->load->view('formsuccess');
		}
	}

	public function username_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('username_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

}
?>