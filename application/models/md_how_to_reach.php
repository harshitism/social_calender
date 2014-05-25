<?php
class Md_how_to_reach extends CI_Model{
	public function __construct(){
		parent::__construct(); //calls the constructer 
	}
	
	/*
	function insert_how_to_reach gets  parameters as a string separated by , as inputs 
	assuming that the input is in order event_id,latitude,longitude,event_date 
	*/
	public function insert_how_to_reach($params){
		$this->load->database();
		$this->load->library('table');
		$data=explode(",",$params);
		
		$query=$this->db->query("INSERT INTO how_to_reach (event_id,latitude,longitude,event_date) VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."')");
		if($this->db->affected_rows() ==1)
			return 1;
	
	}
	
	/*
	function edit_how_to_reach edits or updates the how_to_reach table 
	function edit_how_to_reach gets  parameters as a string separated by , as inputs 
	assuming that the input is in order event_id,latitude,longitude,event_date 
	*/
	public function edit_how_to_reach($params){
		$this->load->database();
		$this->load->library('table');
		$data=explode(",",$params);
		
		$query=$this->db->query("UPDATE how_to_reach SET event_id='".$data[0]."' AND latitude='".$data[1]."' AND longitude='".$data[2]."' event_date='".$data[3]."'");
		if($this->db->affected_rows() ==1){
			return 1;
		}
		else{
			return 0;
		}
	
	}
	
	/** function delete_how_to_reach takes event_id as argument
		$id -> event id of the event to be deleted
		and deletes the row with that event_id in table how_to_reach
	*/
	public function delete_how_to_reach($id) {
		$this->load->database();
		$this->load->library('table');
		$query = $this->db->query("DELETE FROM how_to_reach WHERE event_id='".$id."'");
		if($this->db->affected_rows() ==1){
			return 1;
		}
		else{
			return 0;
		}
	}
	
	//function show_how_to_reach displays the how_to_reach table 
	public function show_how_to_reach()
	{
	$this->load->database();
	$query =$this->db->query(SELECT * FROM how_to_reach);
	$this->load->library('table');
	echo $this->table->generate($query);
	}
}
