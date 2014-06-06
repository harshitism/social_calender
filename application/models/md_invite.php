<?php
class Md_invite extends CI_Model{
	public function __construct(){
		parent::__construct(); //calls the constructor
	}
	
	/*

	function insert_invite gets a parameter array  as inputs 
	assuming that the input is in order invited_friend,friend_id,event_id,location,invited_by 
	it inserts these values in invite table 
	*/
	public function insert_invite($parameter){
		$this->load->database();
		$this->load->library('table');
		$data=array(
		'invited_friend'=>$parameter[0],
		'friend_id'=>$parameter[1],
		'event_id'=>$parameter[2],
		'location'=>$parameter[3],
		'invited_by'=>$parameter[4]
		);
		
		
		$this->db->insert('invite',$data);
		if($this->db->affected_rows() ==1){
		//$this->load->view('tsucc');

		return 1;
		}
		else{
		return 0;
		}

		
	}
	/*
	function edit_invite gets a parameter array  as inputs 
	assuming that the input is in order invited_friend,friend_id,event_id,location,invited_by 
	it edits or updates these values in invite table 
	*/
	public function edit_invite($parameter){
		$this->load->database();
		$this->load->library('table');
			$data=array(
		'invited_friend'=>$parameter[0],
		'friend_id'=>$parameter[1],
		'event_id'=>$parameter[2],
		'location'=>$parameter[3],
		'invited_by'=>$parameter[4]
		);
		$this->db->where('friend_id',$parameter[1]);
		$this->db->where('event_id',$parameter[2]);
		$this->db->update('invite',$data);
		if($this->db->affected_rows() ==1){
		//$this->load->view('tupsucc');

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

	public function delete_invite($friend_id,$event_id) {
		$this->load->database();
		$this->load->library('table');
		$this->db->where('friend_id',$friend_id);
		$this->db->where('event_id',$event_id);
		$this->db->delete('invite');
		if($this->db->affected_rows() ==1){
			//$this->load->view('twsucc');

			return 1;
		}
		else{
		return 0;
		}
	}

	/*function show_invite displays the contents of invite table in
		a tabular form
		*/
	public function show_invite(){

    $this->load->database();
    $this->load->library('table');
	$query = $this->db->query("SELECT * FROM invite");
	echo $this->table->generate($query); 
}	
}
?>

