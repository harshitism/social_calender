<?php
	class Md_event extends CI_Model{
	public function __construct()
	{
	parent::__construct(); //calls the constructor 
	}
	
	/*function insert_event gets parameters as a string separated by , as inputs 
		assuming the inputs are in order event_name,event_description,user_id,start_date,end_date,event_created
		and event_id is assigned automatically 
	*/
	public function insert_event($params)
	{
		$this->load->database();
		$data=explode(",",$params);
		if($data[1]=="")
		$data[1] = "no description!!!";
		$data[5] = date('m/d/Y h:i:s a', time());
		$array = array('event_name' => $data[0], 'event_desc' => $data[1], 'user_id' => $data[2], 'start_date' => $data[3], 'end_date' => $data[4],'event_created' => $data[5]);
		$ins = $this->db->insert('event',$array);
		if($this->db->affected_rows() ==1){
		return 1;
		}
		else{
		return 0;
		}
		
	}
	/*
	function edit_event takes arguments as a string separated by , 
		assuming the inputs are in order event_id,newevent_name,newevent_desc,newstart_date,newend_date
		it edits or updates the table
	*/
	public function edit_event($parameter)
	{
		$this->load->database();
		$data = explode(",",$params); 
		$parameter[5] = date('m/d/Y h:i:s a', time());
		$data=array(
			'event_name'=>$parameter[1],
			'user_desc'=>$parameter[2],
			'start_date'=>$parameter[3],
			'end_date'=>$parameter[4],
			'event_created'=>$parameter[5]
		);	
		$this->db->where('event_id',$parameter[0]);
		$this->db->update('event',$data);
		//$query=$this->db->query("UPDATE event SET event_id='".$data[0]."' AND user_id='".$data[1]."' AND start_date='".$data[2]."' AND end_date='".$data[3]."' WHERE event_id='".data[0]."'");
		if($this->db->affected_rows() ==1){
			//$this->load->view('tupsucc.php');

			return 1;
		}
		else{
			return 0;
		}
	}
	

	
		/*function delete_event deletes the required row in the table
		it takes the event_id as argument 
		$id -> event id of the event to be deleted
		this function deletes the rows of tables having event_id=$id
	*/
	
	public function delete_event($id) {
		$this->load->database();				 
			
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

		}
		
	}
	

	//get_event function displays all the events of the user
	public function get_event($user_id){
		$i = 0;
    $this->load->database();
    $query = $this->db->query("SELECT * FROM event WHERE user_id = '".$user_id."'");
	if($query->num_rows()!=0)
	{
	foreach($query->result() as $row)
	{
		$loc_query = $this->db->query("SELECT latitude,longitude FROM how_to_reach WHERE event_id = '".$row->event_id."'");
		if($loc_query->num_rows()!=0)
		{
		foreach($loc_query->result() as $nrow)
		{
			$res[$i]['latitude'] = $nrow->latitude;
			$res[$i]['longitude'] = $nrow->longitude;
		}
		}
		else
		{
			$res[$i]['latitude'] = "not specified";
			$res[$i]['longitude'] = "not specified";
		}
		if($res[$i]['latitude']=="")
		$res[$i]['latitude'] = "not specified";
		if($res[$i]['longitude']=="")
		$res[$i]['longitude'] = "not specified";
		$invited_query = $this->db->query("SELECT friend_id FROM invite WHERE event_id = '".$row->event_id."'");
		$res[$i]['no_invited'] = $invited_query->num_rows();
		$res[$i]['event_id'] = $row->event_id;
		$res[$i]['event_name'] = $row->event_name;
		if($row->event_desc!="")
    	$res[$i]['event_desc'] = $row->event_desc;
		else
		$res[$i]['event_desc'] = "no description provided";
		$res[$i]['start_date'] = $row->start_date;
		$res[$i]['end_date'] = $row->end_date;	
		$i++;
	}
	return $res;
	}
	else
	{
		$res[0]['event_name'] = "".$user_id." don't have any event!!!";
		$res[0]['start_date'] = "";
		return $res;
	}
	}
}
?>