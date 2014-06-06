<?php
class Md_update_userdetails extends CI_Model {
	public function _construct() {
		parent::__construct();
	}
	public function basicinfo($param)
	{
		$this->load->database();
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$newinfo = explode(",",$param);
		if($newinfo[7]==$newinfo[8])
		{
			if(filter_var($newinfo[3], FILTER_VALIDATE_EMAIL))
			{
				$this->db->where('email',$newinfo[3]);
				$this->db->select('*');
				$email_query = $this->db->get('user');
				if($email_query->num_rows()==0)
				$email = 0;
				else
				{
					if($email_query->num_rows()==1)
					{
						foreach($email_query->result() as $row)
						$uid = $row->user_id;
						if($uid==$user_id)
						$email = 1;
						else
						$email = 2;
					}
					else
					$email = 3;
				}
				if($email==0||$email==1)
				{
					if(is_numeric($newinfo[4]))
					{
						$this->db->where('contact',$newinfo[4]);
						$this->db->select('*');
						$contact_query = $this->db->get('user');
						if($contact_query->num_rows()==0)
						$contact = 0;
						else
						{
							if($contact_query->num_rows()==1)
							{
								foreach($contact_query->result() as $row)
								$uid = $row->user_id;
								if($uid==$user_id)
								$contact = 1;
								else
								$contact = 2;
							}
							else
							$contact = 3;
						}
						if($contact==0||$contact==1)
						{
							$newarr = array('first_name' => $newinfo[0],
							'middle_name' => $newinfo[1],
							'last_name' => $newinfo[2],
							'email' => $newinfo[3],
							'contact' => $newinfo[4],
							'dob' => $newinfo[5],
							'gender' => $newinfo[6],
							'password' => $newinfo[7]);
							$this->db->where('user_id',$user_id);
							$this->db->update('user',$newarr);
							return 1;
						}
						else
						{
							return 6;	//contact already registered
						}
					}
					else
					{
						return 5;	//contact not valid
					}
				}
				else
				{
					return 4;	//email already registered
				}
			}
			else
			{
				return 3;	//email not valid
			}
		}
		else
		{
			return 2;		//passwords and confirmed passwords don't match
		}
		return 0;
	}
	public function education_work($param)
	{
		$this->load->database();
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$newinfo = explode(",",$param);
		$arr = array('user_id' => $user_id,
			'school' => $newinfo[0],
			'college' => $newinfo[1],
			'university' => $newinfo[2],
			'occupation' => $newinfo[3],
			'company' => $newinfo[4],
			'job_designation' => $newinfo[5],
			'work_email' => $newinfo[6]);
		$this->db->where('user_id',$user_id);
		$this->db->select('*');
		$res = $this->db->get('user_details');
		if($res->num_rows()==0)
		{
			$this->db->insert('user_details',$arr);
			if($this->db->affected_rows()==1)
			return 1;
			else
			return 0;
		}
		else
		{
			$this->db->where('user_id',$user_id);
			$this->db->update('user_details',$arr);
			return 1;
		}
		return 0;
	}
	public function address($param)
	{
		$this->load->database();
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$newinfo = explode(",",$param);
		$arr = array('user_id' => $user_id,
			'home_state' => $newinfo[0],
			'home_city' => $newinfo[1],
			'home_pincode' => $newinfo[2],
			'cur_state' => $newinfo[3],
			'cur_city' => $newinfo[4],
			'cur_pincode' => $newinfo[5]);
		$this->db->where('user_id',$user_id);
		$this->db->select('*');
		$res = $this->db->get('user_details');
		if($res->num_rows()==0)
		{
			$this->db->insert('user_details',$arr);
			if($this->db->affected_rows()==1)
			return 1;
			else
			return 0;
		}
		else
		{
			$this->db->where('user_id',$user_id);
			$this->db->update('user_details',$arr);
			return 1;
		}
		return 0;
	}
}
?>