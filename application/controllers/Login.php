<?php
/*	Controller for login page 
Name : Login
Function : Takes arguments from "loginpage" validates and send to model "md_login".
*/

class Login extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
		}
		
		
	function index()
	{	
		$this->load->helper(array('form', 'url'));
		
		$parameter = array(
		'user_name' => $this->input->post('user_name'),
		'password'=> $this->input->post('password')
		);
		
		
<<<<<<< HEAD
=======
		if ($this->form_validation->run() == FALSE)
		{
			$data['uname_error']="Incorrect Username Type";
			$this->load->view('login',$data);
			
		}
		else
		{
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
			$this->load->model('md_login');
			$data['user_id']=$this->md_login->login($parameter['user_name'],$parameter['password']);
			if($data['user_id']==0)
			{
				$data['uname_error']="Incorrect Username & Password Combination";
				$this->load->view('login',$data);
			}
<<<<<<< HEAD
			else if($data['user_id']==-1)
			{
				$data['uname_error']="Email verification required";
				$this->load->view('login',$data);
			}
			else
			{
				$this->load->view('done',$data);
			}
=======
			else
			{
				$this->load->library('session');
				$array = array('user_name' => $parameter['user_name'], 'user_id' => $data['user_id']);
				$this->session->set_userdata($array);
				$this->load->view('done',$data);
			}
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
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
	}
}
?>