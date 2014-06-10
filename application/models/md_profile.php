<?php
class Md_profile extends CI_Model {
	public function _construct() {
		parent::__construct();
	}
	public function get_info($user_id)
	{
		$this->load->database();
		$this->db->where('user_id',$user_id);
		$this->db->select('*');
		$nm = $this->db->get('user');
		foreach($nm->result() as $row)
		{
		$info['first_name'] = $row->first_name;
		$info['middle_name'] = $row->middle_name;
		$info['last_name'] = $row->last_name;
		$info['email'] = $row->email;
		$info['dob'] = $row->dob;
		$info['contact'] = $row->contact;
		$info['gender'] = $row->gender;
		return $info;
		}
		return 0;
	}
	public function get_profilepic($user_id)
	{
		$this->load->database();
		$this->db->where('user_id',$user_id);
		$this->db->select('*');
		$pic = $this->db->get('profile_pic');
		foreach($pic->result() as $row)
		return $row->pic_name;
	}
	public function get_userid($username)
	{
		$this->load->database();
		$this->db->where("(email = '$username' OR contact = '$username')");
		$this->db->select('user_id');
		$query = $this->db->get('user');
		foreach($query->result() as $row)
		return $row->user_id;
	}
	public function get_otherinfo($user_id)
	{
		$this->load->database();
		$this->db->where('user_id',$user_id);
		$this->db->select('*');
		$res = $this->db->get('user_details');
		if($res->num_rows()!=0)
		{
			foreach($res->result() as $row)
			{
			$details['school'] = $row->school;
			$details['college'] = $row->college;
			$details['university'] = $row->university;
			$details['occupation'] =  $row->occupation;
			$details['company'] = $row->company;
			$details['job_designation'] = $row->job_designation;
			$details['work_email'] = $row->work_email;
			$details['home_state'] = $row->home_state;
			$details['home_city'] = $row->home_city;
			$details['home_pincode'] = $row->home_pincode;
			$details['cur_state'] = $row->cur_state;
			$details['cur_city'] = $row->cur_city;
			$details['cur_pincode'] = $row->cur_pincode;
			return $details;
			}
		}
		else
		return 0;
	}
	public function get_password()
	{
		$this->load->database();
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$this->db->where('user_id',$user_id);
		$this->db->select('password');
		$res = $this->db->get('user');
		foreach($res->result() as $row)
		return $row->password;
		return 0;
	}
}
?>