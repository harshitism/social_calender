<?php
class Md_invite extends CI_Model{
	public function __construct(){
		parent::__construct(); //calls the constructor
	}
	
	/*
<<<<<<< HEAD
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
=======
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
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		return 1;
		}
		else{
		return 0;
		}
<<<<<<< HEAD
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
=======
		
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
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
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
<<<<<<< HEAD
	public function delete_invite($event_id,$friend_id) {
		$this->load->database();
		$this->load->library('table');
		$query = $this->db->query("DELETE FROM invite WHERE event_id='".$event_id."' AND friend_id='".$friend_id."';");
		if($this->db->affected_rows() ==1){
=======
	public function delete_invite($friend_id,$event_id) {
		$this->load->database();
		$this->load->library('table');
		$this->db->where('friend_id',$friend_id);
		$this->db->where('event_id',$event_id);
		$this->db->delete('invite');
		if($this->db->affected_rows() ==1){
			//$this->load->view('twsucc');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
			return 1;
		}
		else{
		return 0;
		}
	}
<<<<<<< HEAD
}
=======
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
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
