<?php
class Md_comment extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	//function add_comment to add a comment of current user to an event. takes arguments ("comment,user_id,event_id")
	public function add_comment($params)
	{
		$this->load->database();
		$info = explode(",",$params);
		$info[3] = date('m/d/Y h:i:s a', time());
		//check if comment is not null
		if($info[0]!="")
		{
			//insert the user and event info into comment_user. a comment_id will be automatically assigned.
			$query = $this->db->query("INSERT INTO comment_user (user_id,event_id,date_time) VALUES ('".$info[1]."','".$info[2]."','".$info[3]."')");
			if($this->db->affected_rows() == 1)
			{
				//extract assigned comment_id.
				$newquery = $this->db->query("SELECT comment_id FROM comment_user WHERE user_id = '".$info[1]."' AND event_id = '".$info[2]."' AND time = '".$info[3]."'");
				$res = $newquery->row();
				$comment_id = $res->comment_id;
				//now insert the comment into comment_details.
				$this->db->query("INSERT INTO comment_details VALUES ('".$comment_id."','".$info[0]."')");
				return 1;
			}
			else
			return 0;
		}
		else
		return 0;
	}
	//function del_comment to delete a comment of current user to an event. takes arguments ("user_id,event_id,time")
	public function del_comment($params)
	{
		$this->load->database();
		$info = explode(",",$params);
		//check if this comment exists.
		$exist = $this->db->query("SELECT comment_id FROM comment_user WHERE user_id = '".$info[0]."' AND event_id = '".$info[1]."' AND date_time = '".$info[2]."'");
		$res = $exist->row();
		if($exist->num_rows()!=0)
		{
			//get comment_id of this comment
			$comment_id = $res->comment_id;
			//delete from comment_details
			$this->db->query("DELETE FROM comment_details WHERE comment_id = '".$comment_id."'");
			//delete from comment_user
			$this->db->query("DELETE FROM comment_user WHERE comment_id = '".$comment_id."'");
			return 1;
		}
		else
		return 0;
	}
	//function edit_comment to update a comment of current user to an event. takes arguments ("newcomment,user_id,event_id,oldtime")
	public function edit_comment($params)
	{
		$this->load->database();
		$info = explode(",",$params);
		//check if this comment exists.
		$exist = $this->db->query("SELECT comment_id FROM comment_user WHERE user_id = '".$info[1]."' AND event_id = '".$info[2]."' AND date_time = '".$info[3]."'");
		$res = $exist->row();
		if($exist->num_rows()!=0)
		{
			//get comment_id of this comment
			$comment_id = $res->comment_id;
			$this->db->query("UPDATE comment_details SET comment = '".$info[0]."' WHERE comment_id = '".$comment_id."'");
			//update time of comment in comment_user
			$newtime = date('m/d/Y h:i:s a', time());
			$this->db->query("UPDATE comment_user SET time = '".$newtime."' WHERE comment_id = '".$comment_id."'");
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
		$query = $this->db->query("SELECT * FROM comment_user WHERE event_id = '".$event_id."'");
		$row = $query->result();
		foreach($row as $nrow)
		{
			$comm_query = $this->db->query("SELECT comment FROM comment_details WHERE comment_id = '".$nrow->comment_id."'");
			$comm = $comm_query->row();
			$comment = $comm->comment;
			$result[$i] = array();
			$result[$i]['user_id'] = $nrow->user_id;
			$result[$i]['comment'] = $comment;
			$result[$i]['time'] = $nrow->date_time;
			$i++;
		}
		return $result;
	}
}
?>