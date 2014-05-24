<?php
//this file is a model for adding,deleting or extracting followings of a user. follower table is also updated with following.
class Md_following extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	//function add_follwing to add following of current user takes two arguments (user_id,following_id)
	public function add_following($user_id,$following_id)
	{
		$this->load->database();
		//check if this user already follows following_id
		$check = $this->db->query("SELECT * FROM following WHERE user_id = '".$user_id."' AND following_id = '".$following_id."'");
		if($check->num_rows()==0)
		{
			//insert this following_id into following
			$query = $this->db->query("INSERT INTO following VALUES ('".$user_id."','".$following_id."')");
			if($this->db->affected_rows() == 1)
			{
				//add current user_id to follower of following_id
				$newquery = $this->db->query("INSERT INTO follower VALUES ('".$following_id."','".$user_id."')");
				return 1;
			}
			else
			return 0;
		}
		else
		return 0;
	}
	//function del_following to delete following of current user takes two arguments (user_id,following_id)
	public function del_following($user_id,$following_id)
	{
		$this->load->database();
		//check if user_id follows following_id
		$ch = $this->db->query("SELECT * FROM following WHERE user_id = '".$user_id."' AND following_id = '".$following_id."'");
		if($ch->num_rows()!=0)
		{
			//delete from following
			$this->db->query("DELETE FROM following WHERE user_id = '".$user_id."' AND following_id = '".$following_id."'");
			//delete from follower
			$this->db->query("DELETE FROM follower WHERE user_id = '".$following_id."' AND follower_id = '".$user_id."'");
			return 1;
		}
		else
		return 0;
	}
	//function extract_following to know all the followings of current user takes one argument (user_id)
	public function extract_following($user_id)
	{
		$this->load->database();
		$ext = $this->db->query("SELECT following_id FROM following WHERE user_id = '".$user_id."'");
		$arr = $ext->result();
		return $arr;
	}
}
?>