<?php
class Md_friend extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	//function add_friend to add friend of current user takes arguments (friend_id)
	public function add_friend($friend_id)
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$this->load->database();
		//check if this user already a friend of friend_id
		$array = array('user_id' => $user_id, 'friend_id' => $friend_id);
		$this->db->where($array);
		$this->db->select('*');
		$check = $this->db->get('friend');
		if($check->num_rows()==0)
		{
			//insert this friend_id into friend
			$query = $this->db->insert('friend',$array);
			if($this->db->affected_rows() == 1)
			{
				//add current user_id to friend of friend_id
				$newarr = array('user_id' => $friend_id, 'friend_id' => $user_id);
				$newquery = $this->db->insert('friend',$newarr);
				return 1;
			}
			else
			return 0;
		}
		else
		return 0;
	}
	//function del_friend to delete friend of current user takes arguments (friend_id)
	public function del_friend($friend_id)
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$this->load->database();
		//check if user_id is a friend of friend_id
		$array = array('user_id' => $user_id, 'friend_id' => $friend_id);
		$this->db->where($array);
		$this->db->select('*');
		$ch = $this->db->get('friend');
		if($ch->num_rows()!=0)
		{
			//delete friend_id from friend list if user_id
			$this->db->delete('friend',$array);
			//delete user_id from friend list of friend_id
			$newarr = array('user_id' => $friend_id, 'friend_id' => $user_id);
			$this->db->delete('friend',$newarr);
			return 1;
		}
		else
		return 0;
	}
	//function extract_friend to know all the friends of current user takes one argument (user_id)
public function extract_friend($user_id)
	{
		$this->load->database();
		$this->db->where('user_id',$user_id);
		$this->db->select('friend_id');
		$ext = $this->db->get('friend');
		$arr = $ext->result();
		return $arr;
	}
}
?>