<?php

class Editprofile extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$this->load->model('Md_profile');
		$info = $this->Md_profile->get_info($user_id);
		$details = $this->Md_profile->get_otherinfo($user_id);
		$pic = $this->Md_profile->get_profilepic($user_id);
		$data['first_name'] = $info['first_name'];
		$data['middle_name'] = $info['middle_name'];
		$data['last_name'] = $info['last_name'];
		$data['full_name'] = $info['first_name'];
		if($info['middle_name']!="")
		$data['full_name'] = $data['full_name']." ".$info['middle_name'];
		if($info['last_name']!="")
		$data['full_name'] = $data['full_name']." ".$info['last_name'];
		$data['email'] = $info['email'];
		$data['contact'] = $info['contact'];
		$data['dob'] = $info['dob'];
		$data['gender'] = $info['gender'];
		$data['school'] = $details['school'];
		$data['college'] = $details['college'];
		$data['university'] = $details['university'];
		$data['occupation'] = $details['occupation'];
		$data['company'] = $details['company'];
		$data['job_designation'] = $details['job_designation'];
		$data['work_email'] = $details['work_email'];
		$data['home_state'] = $details['home_state'];
		$data['home_city'] = $details['home_city'];
		$data['home_pincode'] = $details['home_pincode'];
		$data['cur_state'] = $details['cur_state'];
		$data['cur_city'] = $details['cur_city'];
		$data['cur_pincode'] = $details['cur_pincode'];
		$data['personal_webpage'] = $details['personal_webpage'];
		$data['nickname'] = $details['nickname'];
		$data['hobbies'] = $details['hobbies'];
		$data['fav_songs'] = $details['fav_songs'];
		$data['fav_tv_series'] = $details['fav_tv_series'];
		$data['fav_movies'] = $details['fav_movies'];
		$data['fav_sports'] = $details['fav_sports'];
		$data['profilepic'] = $pic;
		$this->load->helper(array('form', 'url'));
		if($this->input->get('password_error'))
		{
			$data['error'] = "Password Should be at least 5 character long!!!";
		}
		if($this->input->get('validation_error'))
		{
			$data['error'] = "Input Validation Errors!!!";
		}
		if($this->input->get('error1'))
		{
			$data['error'] = "New Password and Confirmed Passwords doesn't match!!!";
		}
		if($this->input->get('error2'))
		{
			$data['error'] = "email not valid!!!";
		}
		if($this->input->get('error3'))
		{
			$data['error'] = "email already registered!!!";
		}
		if($this->input->get('error4'))
		{
			$data['error'] = "contact not valid!!!";
		}
		if($this->input->get('error5'))
		{
			$data['error'] = "contact already registered!!!";
		}
		if($this->input->get('error6'))
		{
			$data['error'] = "Failed to Update!!!";
		}
		if($this->input->get('error8'))
		{
			$data['error'] = "Name should have only characters!!!";
		}
		if($this->input->get('update'))
		{
			$data['error'] = "Profile Successfully Updated!!!";
		}
		if($this->input->get('error7')!="")
		{
			$err = $this->input->get('error7');
			$data['error'] = $err;
		}
		$this->load->view('editprofile',$data);
	}
	
}
?>