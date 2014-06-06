<?php
class Md_how_to_reach extends CI_Model{
	public function __construct(){
		parent::__construct(); //calls the constructer 
	}
	

	/*function insert_how_to_reach_how_to_reach gets a parameter array as inputs 
		assuming the inputs are in order id,latitude,longitude,event_date
		it inserts these values in how_to_reach table
		*/
	public function insert_how_to_reach($parameter){
		$this->load->database();
		$this->load->library('table');
		$data=array(
		'event_id'=>$parameter[0],
		'latitude'=>$parameter[1],
		'longitude'=>$parameter[2],
		'event_date'=>$parameter[3]
		);
		$this->db->insert('how_to_reach',$data);
	
		if($this->db->affected_rows() ==1){
			//$this->load->view('tsucc');
			return 1;
		}
		else{
		return 0;
		}
	
	}
	
	/*function edit_how_to_reach gets a parameter array as inputs 
		assuming the inputs are in order id,latitude,longitude,event_date
		it edits or updates these values in how_to_reach table
		*/
	public function edit_how_to_reach($parameter){
		$this->load->database();
		$this->load->library('table');
		$data=array(
		'event_id'=>$parameter[0],
		'latitude'=>$parameter[1],
		'longitude'=>$parameter[2],
		'event_date'=>$parameter[3]
		);
		
		$this->db->where('event_id',$parameter[0]);
		$this->db->update('how_to_reach',$data);
		if($this->db->affected_rows() ==1){
			//$this->load->view('tupsucc');

			return 1;
		}
		else{
			return 0;
		}
	
	}
	

	/*function delete_how_to_reach gets id  as parameter  
		it deletes the rows from having event_id=$id from the how_to_reach table  

	*/
	public function delete_how_to_reach($id) {
		$this->load->database();
		$this->load->library('table');

		$this->db->where('event_id',$id);
		$this->db->delete('how_to_reach');
		if($this->db->affected_rows() ==1){
			//$this->load->view('twsucc');

			return 1;
		}
		else{
			return 0;
		}
	}
	

	/*function show_how_to_reach displays the contents of how_to_reach table in
		a tabular form
	*/
	public function show_how_to_reach()
	{
		$this->load->database();
    $this->load->library('table');
    		$query = $this->db->query("SELECT * FROM how_to_reach");

		echo $this->table->generate($query); 
	}
}
?>
