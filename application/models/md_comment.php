<?php
// this file is used to add, delete, update or retrieve cooments of an event in the database.
class Md_comment extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
<<<<<<< HEAD
	//function add_comment to add a comment of current user to an event. takes arguments ("comment,user_id,event_id")
	public function add_comment($params)
	{
		$this->load->database();
		$info = explode(",",$params);
		$info[3] = date('m/d/Y h:i:s a', time());
=======
	//function add_comment to add a comment of current user to an event. takes arguments ("comment,event_id")
	public function add_comment($params)
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$this->load->database();
		$info = explode(",",$params);
		$info[2] = date('m/d/Y h:i:s a', time());
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		//check if comment is not null
		if($info[0]!="")
		{
			//insert the user and event info into comment_user. a comment_id will be automatically assigned.
<<<<<<< HEAD
			$array = array('user_id' => $info[1], 'event_id' => $info[2], 'date_time' => $info[3]);
=======
			$array = array('user_id' => $user_id, 'event_id' => $info[1], 'date_time' => $info[2]);
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
			$query = $this->db->insert('comment_user',$array);
			if($this->db->affected_rows() == 1)
			{
				//extract assigned comment_id.
				$this->db->where($array);
				$this->db->select('comment_id');
				$newquery = $this->db->get('comment_user');
				$res = $newquery->row();
				$comment_id = $res->comment_id;
				//now insert the comment into comment_details.
<<<<<<< HEAD
				$newarr = array('comment_id' => $comment_id, $comment => $info[0]);
=======
				$newarr = array('comment_id' => $comment_id, 'comment' => $info[0]);
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
				$this->db->insert('comment_details',$newarr);
				return 1;
			}
			else
			return 0;
		}
		else
		return 0;
	}
	//function del_comment to delete a comment of current user to an event. takes arguments ("comment_id")
	public function del_comment($comment_id)
	{
		$this->load->database();
		//check if this comment exists.
		$this->db->where('comment_id',$comment_id);
		$this->db->select('*');
		$exist = $this->db->get('comment_user');
		$res = $exist->row();
		if($exist->num_rows()!=0)
		{
			//delete from comment_details
			$this->db->where('comment_id',$comment_id);
			$this->db->delete('comment_details');
			//delete from comment_user
			$this->db->where('comment_id',$comment_id);
			$this->db->delete('comment_user');
			return 1;
		}
		else
		return 0;
	}
	//function edit_comment to update a comment of current user to an event. takes arguments ("newcomment,comment_id")
	public function edit_comment($params)
	{
		$this->load->database();
		$info = explode(",",$params);
		//check if this comment exists.
		$this->db->where('comment_id',$info[1]);
		$this->db->select('*');
		$exist = $this->db->get('comment_user');
		$res = $exist->row();
		if($exist->num_rows()!=0)
		{
			$arr = array('comment' => $info[0]);
			$this->db->where('comment_id',$info[1]);
			$this->db->update('comment_details',$arr);
			//update time of comment in comment_user
			$newtime = date('m/d/Y h:i:s a', time());
			$newarr = array('date_time' => $newtime);
			$this->db->where('comment_id',$info[1]);
			$this->db->update('comment_user',$newarr);
			return 1;
		}
		else
		return 0;
	}
	//function get_comment to extract all comments of an event. takes one argument (event_id)
	//returns a 2-D array containing user_id,comment and time of each comment
	public function get_comment($event_id)
	{
		$i = 0;
		$result = array();
		$this->load->database();
		$this->db->where('event_id',$event_id);
		$this->db->select('*');
		$query = $this->db->get('comment_user');
		$row = $query->result();
		foreach($row as $nrow)
		{
			$this->db->where('comment_id',$nrow->comment_id);
			$this->db->select('comment');
			$comm_query = $this->db->get('comment_details');
			$comm = $comm_query->row();
			$comment = $comm->comment;
			$result[$i] = array();
			$result[$i]['user_id'] = $nrow->user_id;
			$result[$i]['comment'] = $comment;
			$result[$i]['time'] = $nrow->date_time;
			$result[$i]['comment_id'] = $nrow->comment_id;
			$i++;
		}
		return $result;
	}
<<<<<<< HEAD
	//function get_commentid used to retreive comment_id from user_id,event_id,time
	public function get_commentid($params)
	{
		$this->load->database();
		$info = explode(",",$params);
		$array = array('user_id' => $info[0], 'event_id' => $info[1], 'date_time' => $info[3]);
=======
	//function get_commentid used to retreive comment_id from event_id,time
	public function get_commentid($params)
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$this->load->database();
		$info = explode(",",$params);
		$array = array('user_id' => $user_id, 'event_id' => $info[0], 'date_time' => $info[1]);
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		$this->db->where($array);
		$this->db->select('comment_id');
		$cid = $this->db->get('comment_user');
		foreach( $cid->result() as $row)
		{
			return $row->comment_id;
		}
		return 0;
	}
}
?>