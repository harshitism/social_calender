<?php
	class Md_event extends CI_Model{
	public function __construct()
	{
	parent::__construct(); //calls the constructor 
	}
	
<<<<<<< HEAD
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
=======
	/*function insert_event gets parameters in a parameter array  input
		assuming the inputs are in order user_id,start_date,end_date
		and event_id is assigned automatically 
	*/
	public function insert_event($parameter)
	{
		$this->load->database();
		$this->load->library('table');
		$data=array(
			'user_id'=>$parameter[0],
			'start_date'=>$parameter[1],
			'end_date'=>$parameter[2]
		);
		$this->db->insert('event',$data); 
		if($this->db->affected_rows() ==1){
		//$this->load->view('tsucc');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		return 1;
		}
		else{
		return 0;
		}
		
	}
	
<<<<<<< HEAD
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
=======



	
	/*function edit_event takes arguments as a parameter array  
		assuming the inputs are in order event_id,user_id,start_date,end_date
		it edits or updates the table 
	*/
	public function edit_event($parameter)
	{
		$this->load->database();
		$this->load->library('table');
		$data=array(
			'event_id'=>$parameter[0],
			'user_id'=>$parameter[1],
			'start_date'=>$parameter[2],
			'end_date'=>$parameter[3]
		);	
		$this->db->where('event_id',$parameter[0]);
		$this->db->update('event',$data);
		//$query=$this->db->query("UPDATE event SET event_id='".$data[0]."' AND user_id='".$data[1]."' AND start_date='".$data[2]."' AND end_date='".$data[3]."' WHERE event_id='".data[0]."'");
		if($this->db->affected_rows() ==1){
			//$this->load->view('tupsucc.php');
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
			return 1;
		}
		else{
			return 0;
		}
	}
	
<<<<<<< HEAD
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
=======
	
		/*function delete_event deletes the required row in the table
		it takes the event_id as argument 
		$id -> event id of the event to be deleted
		this function deletes the rows of tables having event_id=$id
	*/
	
	public function delete_event($id) {
		$this->load->database();
		$this->load->library('table');				 
			
		$this->db->where('event_id',$id);
		$this->db->delete('event');
		
		$this->db->where('event_id',$id);
		$this->db->delete('invite');
		
		$this->db->where('event_id',$id);
		$this->db->delete('photo');
		
		$this->db->where('event_id',$id);
		$this->db->delete('video');
		
		$this->db->where('event_id',$id);
		$this->db->delete('how_to_reach');
		
		if($this->db->affected_rows()>=1){
		//$this->load->view('twsucc');  
		return 1;
		}
		else{
			return 0;
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		}
		
	}
	
<<<<<<< HEAD
	//show_event function displays the table 
=======
	/*function show displays the contents of event table in
		a tabular form
		*/
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
	public function show_event(){

    $this->load->database();
    $this->load->library('table');
<<<<<<< HEAD
    $query = $this->db->query('SELECT * FROM event'); 
    $table = $this->table->generate($query);
    return $table;  
	}
}
=======
    $query = $this->db->query("SELECT * FROM event");

		echo $this->table->generate($query); 

}	
}
?>
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
