<?php

class Update_userdetails extends CI_Controller {

	public function basicinfo()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$parameter = array('first_name' => $this->input->post('first_name'),
		'middle_name' => $this->input->post('middle_name'),
		'last_name' => $this->input->post('last_name'),
		'email' => $this->input->post('email'),
		'contact' => $this->input->post('contact'),
		'dob' => $this->input->post('dob'),
		'gender' => $this->input->post('gender'),
		'new_password' => $this->input->post('new_password'),
		'confirm_new_password' => $this->input->post('confirm_new_password'));
		if($parameter['new_password']=="")
		{
			$this->load->model('Md_profile');
			$parameter['new_password'] = $this->Md_profile->get_password();
			$parameter['confirm_new_password'] = $parameter['new_password'];
		}
		$this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[1]|max_length[12]|alpha_numeric');
		$this->form_validation->set_rules('middle_name', 'Middle Name', 'required|max_length[20]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|max_length[20]');
		$this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email');
		$this->form_validation->set_rules('dob', 'Birthday', 'required|valid_date[dd/mm/yyyy,/]');
		$this->form_validation->set_rules('contact', 'Contact', 'required|min_length[10]|max_length[10]|numeric');
		if(strlen($parameter['new_password'])<5||strlen($parameter['new_password'])>20)
		redirect('/editprofile?password_error=true');
		if ($this->form_validation->run() == FALSE)
		{
			redirect('/editprofile?validation_error=true');
		}
		else
		{
			$this->load->model('Md_update_userdetails');
			$param = implode(",",$parameter);
			$res = $this->Md_update_userdetails->basicinfo($param);
			if($res==2)
			{
				redirect('/editprofile?error1=true');
			}
			else if($res==3)
			{
				redirect('/editprofile?error2=true');
			}
			else if($res==4)
			{
				redirect('/editprofile?error3=true');
			}
			else if($res==5)
			{
				redirect('/editprofile?error4=true');
			}
			else if($res==6)
			{
				redirect('/editprofile?error5=true');
			}
			else if($res==0)
			{
				redirect('/editprofile?error6=true');
			}
			else
			{
				redirect('/editprofile?update=true');
			}
		}
	}
	public function education_work()
	{
		$this->load->helper(array('form', 'url'));
		$parameter = array('school' => $this->input->post('school'),
		'college' => $this->input->post('college'),
		'university' => $this->input->post('university'),
		'occupation' => $this->input->post('occupation'),
		'company' => $this->input->post('company'),
		'job_designation' => $this->input->post('job_designation'),
		'work_email' => $this->input->post('work_email'));
		$this->load->model('Md_update_userdetails');
		$param = implode(",",$parameter);
		if($this->Md_update_userdetails->education_work($param))
		{
			redirect('/editprofile?update=true');
		}
		else
		{
			redirect('/editprofile?error6=true');
		}
	}
	public function profilepic()
	{
		$this->load->helper(array('form', 'url'));
				$config['upload_path'] = './assets/uploads/profilepics/';
				$config['allowed_types'] = 'jpg|jpeg|gif|png';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('pic'))
				{
					$value = $this->upload->display_errors();
					redirect('/editprofile?error7='.$value.'');
				}
				else
				{
					$upload_data = $this->upload->data(); 
  					$file_name =   $upload_data['file_name'];
					$this->load->model('Md_profilepic');
					if($this->Md_profilepic->change_profilepic($file_name))
					{
						redirect('/editprofile?update=true');
					}
					else
					{
						redirect('/editprofile?error6=true');
					}
				}				
	}
	public function address()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$parameter = array('home_state' => $this->input->post('home_state'),
		'home_city' => $this->input->post('home_city'),
		'home_pincode' => $this->input->post('home_pincode'),
		'cur_state' => $this->input->post('cur_state'),
		'cur_city' => $this->input->post('cur_city'),
		'cur_pincode' => $this->input->post('cur_pincode'));
		$this->form_validation->set_rules('home_pincode', 'Home Pin Code', 'required|min_length[6]|max_length[6]|numeric');
		$this->form_validation->set_rules('cur_pincode', 'Current Pin Code', 'required|min_length[6]|max_length[6]|numeric');
		$this->load->model('Md_update_userdetails');
		$param = implode(",",$parameter);
		if ($this->form_validation->run() == FALSE)
		{
			redirect('/editprofile?validation_error=true');
		}
		else if($this->Md_update_userdetails->address($param))
		{
			redirect('/editprofile?update=true');
		}
		else
		{
			redirect('/editprofile?error6=true');
		}
	}
}
?>