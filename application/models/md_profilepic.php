<?php
class Md_profilepic extends CI_Model {
	public function _construct() {
		parent::__construct();
	}
	public function add_profilepic($user_id,$name)
	{
		$this->load->database();
		$array = array('user_id' => $user_id, 'pic_name' => $name);
		$this->db->insert('profile_pic',$array);
		if($this->db->affected_rows()==1)
		return 1;
		else
		return 0;
	}
	public function change_profilepic($name)
	{
		$this->load->database();
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$this->db->where('user_id',$user_id);
		$this->db->select('*');
		$exist = $this->db->get('profile_pic');
		if($exist->num_rows()!=0)
		{
		$arr = array('pic_name' => $name);
		foreach($exist->result() as $nrow)
		{
			$path = "assets/uploads/profilepics/".$nrow->pic_name;
		}
		if($nrow->pic_name!="male.png"&&$nrow->pic_name!="female.png")
		unlink($path);
		$this->db->where('user_id',$user_id);
		$this->db->update('profile_pic',$arr);
		return 1;
		}
		else
		{
			$array = array('user_id' => $user_id, 'pic_name' => $name);
			$this->db->insert('profile_pic',$array);
			if($this->db->affected_rows()==1)
			return 1;
			else
			return 0;
		}
	}
}
	?>