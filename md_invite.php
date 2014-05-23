<?php
class Md_invite extends CI_Model{
	public function __construct(){
		parent::__construct(); //calls the constructor
	}
	
	/*
	function insert_invite gets parameters as a string separated by , as inputs 
	assuming that the input is in order invited_friend,friend_id,event_id,location,invited_by 
	*/
	public function insert_invite($params){
		$this->load->database();
		$this->load->library('table');
		$data=explode(",",$params);
		
		//check if the same friend has been invited in the same event 
		$check=$this->db->query("SELECT * FROM invite WHERE friend_id='".$data[1]."' AND event_id='".$data[2]."' ");
		if(check->num_rows()==0){
		$query=$this->db->query("INSERT INTO invite (invited_friend,friend_id,event_id,location,invited_by) VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')");
		if($this->db->affected_rows() ==1){
		return 1;
		}
		else{
		return 0;
		}
		}
		else{
		return 0;
		}
		
	}
	/*
	function edit_invite edits or updates the invite table
	function edit_invite gets parameters as a string separated by , as inputs 
	assuming that the input is in order invited_friend,friend_id,event_id,location,invited_by 
	*/
	public function edit_invite($params){
		$this->load->database();
		$this->load->library('table');
		$data=explode(",",$params);

		$query=$this->db->query("UPDATE invite SET invited_friend='".$data[0]."' AND friend_id='".$data[1]."' AND event_id='".$data[2]."' AND location='".$data[3]."' AND invited_by='".$data[4]."' WHERE event_id='".$data[2]."' AND friend_id='".$data[1]."' ;");
		if($this->db->affected_rows() ==1){
		return 1;
		}
		else{
		return 0;
		}
	}
	
	/**
		function delete_invite takes event_id and friend_id as argument
		and deletes the row with that event_id and friend_id in table invite 
	*/
	public function delete_invite($event_id,$friend_id) {
		$this->load->database();
		$this->load->library('table');
		$query = $this->db->query("DELETE FROM invite WHERE event_id='".$event_id."' AND friend_id='".$friend_id."';");
		if($this->db->affected_rows() ==1){
			return 1;
		}
		else{
		return 0;
		}
	}
}
