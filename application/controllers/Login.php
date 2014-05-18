<?php
/*	Controller for login page 
Name : Login
Function : Takes arguments from "loginpage" validates and send to model "md_login".
*/

class Login extends CI_Controller{
function index()
	{	
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');		//importing validation library
		
		$parameter = array(
		'user_name' => $this->input->post('user_name'),
		'password'=> $this->input->post('password')
		);
		
		if (!is_numeric($parameter['user_name']))
		$this->form_validation->set_rules('user_name', 'E-mail', 'required|min_length[5]|max_length[50]|valid_email');	//validation rule for login with email
		
		else
		$this->form_validation->set_rules('user_name', 'Phone No.', 'required|min_length[10]|max_length[100]|callback_check_digit');		//validation rule for login with phone no.
		
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[50]');			//validation rule for password
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('loginpage');
		}
		else
		{
			echo 'form submitted';
			$param = implode(",",$parameter);
			$this->load->model('md_login','',$param);
		}
	}

/*	Function name : check_digit
Function : ensures the presence of only digits in user entered phone no.*/
	
function check_digit($str)
	{	
		if (ctype_digit($str))
		return TRUE;
		else
		{
			$this->form_validation->set_message('check_digit','The %s field must contain only decimal digits');
			return false;
		}
	}
}
?>