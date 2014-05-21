<?php
//this file is a model for extracting all the followers of a user.
class Md_follower extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	//function extract_follower to know all the followers of current user takes one argument (user_id)
	public function extract_follower($user_id)
	{
		$this->load->database();
		$ext = $this->db->query("SELECT follower_id FROM follower WHERE user_id = '".$user_id."'");
		$arr = $ext->result();
		return $arr;
	}
}
?>