<?php
	class Md_photo extends CI_Model{
	public function __construct(){
		parent::__construct(); //calls the constructor
	}
	/*
	function insert_photo gets parameters as a string separated by , as inputs 
<<<<<<< HEAD
	assuming that the order of input is event_id,added_by,path
	photo_id and date_added are generated itself automatically
	*/
	public function insert_photo($params){
		$this->load->database();
		$this->load->library('table');
		
		$data=explde(",",$params);
		$data[4] = date('m/d/Y h:i:s a', time());
		$query=$this->db->query("INSERT INTO photo (event_id,added_by,path,date_added) VALUES('".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')");
		if($this->db->affected_rows() == 1){
=======
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
			//$this->load->view('tsucc');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
			return 1;
		}
		else{
		return 0;
		}
	}
	
	/*
<<<<<<< HEAD
		function edit_photo gets parameters as a string separated by , as inputs 
		assuming inputs are in order event_id,added_by,path
		it edits or updates the photo table
	*/
	public function edit_photo($params){
		$this->load->database();
		$this->load->library('table');
		
		$data=explode(",",$params);
		$new_time = date('m/d/Y h:i:s a', time());
		$query=$this->db->query("UPDATE photo SET photo_id='".$data[0]."' AND event_id='".$data[1]."' AND added_by='".$data[2]."' AND path='".$data[3]."' AND date_added='".$new_time."' WHERE photo_id='".$data[0]."'");
		if($this->db->affected_rows() == 1){
=======
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
			//$this->load->view('tupsucc');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
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
<<<<<<< HEAD
	public function delete_photo($photo_id,$event_id) {
		$this->load->database();
		$this->load->library('table');
		$query = $this->db->query("DELETE FROM photo WHERE photo_id='".$photo_id."' AND event_id='".$event_id."'");
		if($this->db->affected_rows() ==1){
=======
	public function delete_photo($photo_id) {
		$this->load->database();
		$this->load->library('table');
		$this->db->where('photo_id',$photo_id);
		$this->db->delete('photo');
		if($this->db->affected_rows() ==1){
			//$this->load->view('twsucc');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
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
<<<<<<< HEAD
	$query =$this->db->query(SELECT * FROM photo);
	$this->load->library('table');
	echo $this->table->generate($query);
	}
	
}
=======
    $this->load->library('table');

		$query = $this->db->query("SELECT * FROM photo");

		echo $this->table->generate($query); 
	}
	
}
?>
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
