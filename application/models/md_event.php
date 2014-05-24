<?php
	class Md_event extends CI_Model{
	public function __construct()
	{
	parent::__construct(); //calls the constructor 
	}
	
	/*function insert_event gets parameters as a string separated by , as inputs 
		assuming the inputs are in order user_id,start_date,end_date 
		and event_id is assigned automatically 
	*/
	public function insert_event($params)
	{
		$this->load->database();
		$this->load->library('table');
		$data=explode(",",$params);
		
		
		$query=$this->db->query(INSERT INTO event (user_id,start_date,end_date) VALUES('".$data[0]."','".$data[1]."','".$data[2]."','."$data[3]".'));
		if($this->db->affected_rows() ==1){
		return 1;
		}
		else{
		return 0;
		}
		
	}
	
	/*
	function edit_event takes arguments as a string separated by , 
		assuming the inputs are in order event_id,user_id,start_date,end_date
		it edits or updates the table 
	*/
	public function edit_event($params)
	{
		$this->load->database();
		$this->load->library('table');
		$data = explode(",",$params); 
			
		//check if the event exists
		$query=$this->db->query("UPDATE event SET event_id='".$data[0]."' AND user_id='".$data[1]."' AND start_date='".$data[2]."' AND end_date='".$data[3]."' WHERE event_id='".data[0]."'");
		if($this->db->affected_rows() ==1){
			return 1;
		}
		else{
			return 0;
		}
	}
	
	/**
		function delete_event deletes the required row in the table
		it takes the event_id as argument 
		$id -> event id of the event to be deleted
	*/
	public function delete_event($id) {
		$this->load->database();
		$this->load->library('table');
		
		//checks if there exists some event with tihs event id		
		$exist=$this->db->query("SELECT * FROM event WHERE event_id='".$id."'");
		if($exist->num_rows()!=0){
		
		//here we delete the event and all other tables' rows related with that event 
		$query = $this->db->query("DELETE FROM event WHERE event_id='".$id."'");
		$query = $this->db->query("DELETE FROM how_to_reach WHERE event_id='".$id."'");
		$query = $this->db->query("DELETE FROM invite WHERE event_id='".$id."'");
		$query = $this->db->query("DELETE FROM photo WHERE event_id='".$id."'");
		$query = $this->db->query("DELETE FROM video WHERE event_id='".$id."'");
		return 1;
		}
		else{
		return 0;
		}
		
	}
	
	//show_event function displays the table 
	public function show_event(){

    $this->load->database();
    $this->load->library('table');
    $query = $this->db->query('SELECT * FROM event'); 
    $table = $this->table->generate($query);
    return $table;  
	}
}
