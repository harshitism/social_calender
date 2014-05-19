<?php
class Login extends CI_Controller{
function index()
		{	
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		
		$parameter = array(
		'user_name' => $this->input->post('user_name'),
		'password'=> $this->input->post('password')
		);
		
		$this->form_validation->set_rules('user_name', 'User name', 'required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[20]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('loginpage');
		}
		else
		{
			echo 'form submitted';
			$this->load->model('md_login','',$parameter);
		}
	}
}
?>





