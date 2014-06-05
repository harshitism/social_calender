<?php
//this file is a model for extracting all the followers of a user.
class Md_follower extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	//function extract_follower to know all the followers of current user takes one argument (user_id)

	public function extract_follower()
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');

		$this->load->database();
		$this->db->where('user_id',$user_id);
		$this->db->select('follower_id');
		$ext = $this->db->get('follower');
		$arr = $ext->result();
		return $arr;
	}
}
?>