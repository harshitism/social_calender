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
			$this->load->view('register');
		}
		else
		{
			$param = implode(",",$parameter);
			$this->load->model('Md_register');	
			if($this->Md_register->md_register($param))
			{
				$data['succ'] = "successfully registered";
				$this->load->view('done1',$data);
			}
			else
			{
				$data['succ'] = "error";
				$this->load->view('done1',$data);
			}
		}
	}
}
?>





