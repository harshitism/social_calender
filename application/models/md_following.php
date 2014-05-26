<?php
//this file is a model for adding,deleting or extracting followings of a user. follower table is also updated with following.
class Md_following extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	//function add_follwing to add following of current user takes two arguments (user_id,following_id)
<<<<<<< HEAD
	public function add_following($user_id,$following_id)
	{
=======
	public function add_following($following_id)
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		$this->load->database();
		//check if this user already follows following_id
		$array = array('user_id' => $user_id, 'following_id' => $following_id);
		$this->db->where($array);
		$this->db->select('*');
		$check = $this->db->get('following');
		if($check->num_rows()==0)
		{
			//insert this following_id into following
			$query = $this->db->insert('following',$array);
			if($this->db->affected_rows() == 1)
			{
				//add current user_id to follower of following_id
				$newarr = array('user_id' => $following_id, 'follower_id' => $user_id);
				$newquery = $this->db->insert('follower',$newarr);
				return 1;
			}
			else
			return 0;
		}
		else
		return 0;
	}
	//function del_following to delete following of current user takes two arguments (user_id,following_id)
<<<<<<< HEAD
	public function del_following($user_id,$following_id)
	{
=======
	public function del_following($following_id)
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		$this->load->database();
		//check if user_id follows following_id
		$array = array('user_id' => $user_id, 'following_id' => $following_id);
		$this->db->where($array);
		$this->db->select('*');
		$ch = $this->db->get('following');
		if($ch->num_rows()!=0)
		{
			//delete from following
			$this->db->delete('following',$array);
			//delete from follower
			$newarr = array('user_id' => $following_id, 'follower_id' => $user_id);
			$this->db->delete('follower',$newarr);
			return 1;
		}
		else
		return 0;
	}
	//function extract_following to know all the followings of current user takes one argument (user_id)
<<<<<<< HEAD
	public function extract_following($user_id)
	{
=======
	public function extract_following()
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		$this->load->database();
		$this->db->where('user_id',$user_id);
		$this->db->select('following_id');
		$ext = $this->db->get('following');
		$arr = $ext->result();
		return $arr;
	}
}
?>