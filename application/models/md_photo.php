<?php
	class Md_photo extends CI_Model{
	public function __construct(){
		parent::__construct(); //calls the constructor
	}
	/*
	function insert_photo gets parameters as a string separated by , as inputs 
	assuming that the order of input is event_id,added_by,path,date_added
	photo_id is generated itself automatically
	*/
	public function insert_photo($parameter){
		$this->load->database();
		$this->load->library('table');
		$date=date('m/d/Y h:i:s a', time());   
		$data=array(
		'event_id'=>$parameter[0],
		'added_by'=>$parameter[1],
		'path'=>$parameter[2],
		'date_added'=>$date
		);
		
		$this->db->insert('photo',$data);
		if($this->db->affected_rows() == 1){
			//$this->load->view('profile');
			return 1;
		}
		else{
		return 0;
		}
	}
	
	/*
	function edit_photo gets parameters as a string separated by , as inputs 
	assuming that the order of input is photo_id,event_id,added_by,path,date_added
	it edits or updates these values in the photo table 
	*/
	public function edit_photo($parameter){
		$this->load->database();
		$this->load->library('table');
		$date=date('m/d/Y h:i:s a', time());

		$data=array(
		'photo_id'=>$parameter[0],
		'event_id'=>$parameter[1],
		'added_by'=>$parameter[2],
		'path'=>$parameter[3],
		'date_added'=>$date 
		);
		$this->db->where('photo_id',$parameter[0]);
		$this->db->update('photo',$data);
		if($this->db->affected_rows() == 1){
			
			return 1;
		}
		else{
		return 0;
		}
	}
	
	/**
		function delete_photo takes photo_id and event_id as arguments
		and deletes the row with that photo_id in table photo
	*/
	public function delete_photo($photo_id) {
		$this->load->database();
		$this->load->library('table');
		$this->db->where('photo_id',$photo_id);
		$this->db->delete('photo');
		if($this->db->affected_rows() ==1){
			$this->load->view('profile');
			return 1;
		}
		else{
		return 0;
		}
	}
	
	//function show_photo_table displays the photo table 
	public function show_photo_table()
	{
	$this->load->database();
    $this->load->library('table');

		$query = $this->db->query("SELECT * FROM photo");

		echo $this->table->generate($query);
	}
	
}
?>
