<?php
	class Md_video extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	/*function insert_video  gets a parameter array 
		assuming the inputs are in order event,added_by,path
		and video_id and date_added are assigned automatically
		it inserts these values in video table
		*/
	public function insert_video($parameter){
		$this->load->database();
		$this->load->library('table');
		$date = date('m/d/Y h:i:s a', time());
		$data=array(
		'event_id'=>$parameter[0],
		'added_by'=>$parameter[1],
		'path'=>$parameter[2],
		'date_added'=>$date
		);
		
		$this->db->insert('video',$data);
		if($this->db->affected_rows() == 1){
			//$this->load->view('tsucc');
			return 1;
		}
		else{
		return 0;
		}
	}
	
	/*function edit_video  gets a parameter array 
		assuming the inputs are in order video_id,event,added_by,path
		and date_added are assigned automatically
		it edits or updates these values in video table
		*/
	public function edit_video($parameter){
		$this->load->database();
		$this->load->library('table');
		
		$date = date('m/d/Y h:i:s a', time());
		$data=array(
		'video_id'=>$parameter[0],
		'event_id'=>$parameter[1],
		'added_by'=>$parameter[2],
		'path'=>$parameter[3],
		'date_added'=>$date
		);
		
		
		$this->db->where('video_id',$parameter[0]);
		$this->db->update('video',$data);
		if($this->db->affected_rows() == 1){
			//$this->load->view('tupsucc');
			return 1;
		}
		else{
			return 0;
		}
	}
	
	/*
	function delete_video takes video_id as argument
		$id -> video_id of the video to be deleted
		and deletes the row with that video_id in table video
	*/
	public function delete_video($video_id) {
		$this->load->database();
		$this->load->library('table');
		$this->db->where('video_id',$video_id);
		$this->db->delete('video');
		if($this->db->affected_rows() ==1){
			//$this->load->view('twsucc');
			return 1;
		}
		else{
			return 0;
		}
	}
	
	//function show_video_table displays the video table 
	public function show_video_table()
	{
	
	$this->load->database();
    $this->load->library('table');
    		$query = $this->db->query("SELECT * FROM video");

		echo $this->table->generate($query); 
	}
	
}
