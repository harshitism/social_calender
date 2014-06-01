<?php
class Register extends CI_Controller{
	
	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		
		$parameter = array(
        'first_name' => $this->input->post('first_name'),
		'middle_name' => $this->input->post('middle_name'),
		'last_name' => $this->input->post('last_name'),
		'email' => $this->input->post('email'),
		'dob' => $this->input->post('dob'),
		'contact' => $this->input->post('contact'),
        'password' =>	$this->input->post('password'),
		'gender' => $this->input->post('gender')
		);

		$this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[1]|max_length[12]|alpha_numeric');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'required|max_length[20]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[20]');
		$this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required|valid_date[dd-mm-yyyy,/]');
		$this->form_validation->set_rules('contact', 'Contact', 'required|min_length[10]|max_length[10]|numeric');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[20]|');
		//$this->form_validation->set_rules('gender', 'Gender', 'required|min_length[4]|max_length[10]|!numeric');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['uname_error']="Input Validation Errors";
			$this->load->view('startpage',$data);
		}
		else
		{
			$param = implode(",",$parameter);
			$this->load->model('Md_register');	
			$status=$this->Md_register->register($param);
			if($status==1)
			{
				$this->load->model('Md_profile');
				$user_id = $this->Md_profile->get_userid($parameter['email']);
				if($parameter['gender']=="Male")
				$default = "male.png";
				else
				$default = "Female.png";
				$this->load->model('Md_profilepic');
				$this->Md_profilepic->add_profilepic($user_id,$default);
				$this->load->view('startpage');
			}
			else if($status==2)
			{
				$data['uname_error']="Inserted Information is Invalid";
				$this->load->view('startpage',$data);
			}
			else if($status==3)
			{
				$data['uname_error']="Name of User contains invalid Characters";
				$this->load->view('startpage',$data);
			}
			else if($status==4)
			{
				$data['uname_error']="Email is not Validated";
				$this->load->view('startpage',$data);
			}
			else if($status==5)
			{
				$data['uname_error']="Email already Exists";
				$this->load->view('startpage',$data);
			}
			else if($status==6)
			{
				$data['uname_error']="Mobile Number already Exists";
				$this->load->view('startpage',$data);
			}
		}
	}
}
?>





