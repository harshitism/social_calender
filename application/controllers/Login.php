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
				$this->load->view('startpage',$data);
			}
			else if($data['user_id']==-1)
			{
				$data['uname_error']="Email verification required";
				$this->load->view('startpage',$data);
			}
			else if($data['user_id']==-1)
			{
				$data['uname_error']="Email verification required";
				$this->load->view('login',$data);
			}
			else
			{
<<<<<<< HEAD
				$this->load->view('done',$data);
=======
				
				$this->load->library('session');
				$array = array('user_name' => $parameter['user_name'], 'user_id' => $data['user_id']);
				$this->session->set_userdata($array);
				$this->load->helper('url');
				redirect('/Profile_currentuser');
>>>>>>> eb70b087e35e35c42e9233f89baa4658e04346f8
			}
	}
}
?>