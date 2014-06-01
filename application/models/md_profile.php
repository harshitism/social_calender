<?php
class Md_profile extends CI_Model {
	public function _construct() {
		parent::__construct();
	}
	public function get_name($user_id)
	{
		$this->load->database();
		$this->db->where('user_id',$user_id);
		$this->db->select('*');
		$nm = $this->db->get('user');
		foreach($nm->result() as $row)
		{
		$name = $row->first_name;
		if($row->middle_name!="")
		$name = $name." ".$row->middle_name;
		if($row->last_name!="")
		$name = $name." ".$row->last_name;
		return $name;
		}
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
}
?>