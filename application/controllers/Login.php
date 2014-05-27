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
		
		
			$this->load->model('md_login');
			$data['user_id']=$this->md_login->login($parameter['user_name'],$parameter['password']);
			if($data['user_id']==0)
			{
				$data['uname_error']="Incorrect Username & Password Combination";
				$this->load->view('login',$data);
			}
			else if($data['user_id']==-1)
			{
				$data['uname_error']="Email verification required";
				$this->load->view('login',$data);
			}
			else
			{
				$this->load->view('user_profile');
			}
	}
}
?>