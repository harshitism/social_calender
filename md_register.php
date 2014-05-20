<?php 
class Md_register extends CI_Model{
	
	public function __construct(){
		parent:__construct();
	}
	//function md_register gets parameters separated by , as inputs 
	public function md_register($params){
		$this->load->database();
		/**
			Assuming $data contains all the fields required and called from respective controller.
			Fields include:
				1. user_id, 
				2. first_name, 
				3. middle_name, 
				4. last_name, 
				5. email, 
				6. dob, 
				7. contact, 
				8. password, 
				9. gender
		*/
		/*
		//if fields will not be provided, please uncomment this block
			$this->load->helper('url');
			$data = array(
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'dob' => $this->input->post('dob'),
				'contact' => $this->input->post('contact'),
				'password' => $this->input->post('password'),
				'confirm password' =>$this->input->post('confirm_password');
				'gender' => $this->input->post('gender')
			);
		and comment the next line (the line containg explode )
		*/
		$data=explode(",",$params); //fetching the input parameters which are separated b ',' into $data 
		
		$alreadyexist = $this->db->query("SELECT * FROM user WHERE email = '".$data[3]."'"); //checking if there is already same email in the database
		if($alreadyexist->num_rows!=0)
			return 0;
		
		$name=$data[0].$data[1].$data[2];				
		if(!ctype_alpha($name))				//checking if the name contains only characters
			return 0;
		
							//assuming $data[6] and $data[7] are password and confirm password respectively we insert only password in the database
			$query=$this->db->query(INSERT INTO user (first_name,middle_name,last_name,email,dob,contact,password,gender) values('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[8]."');
			if($this->db->affected_rows() == 1)
			return 1;
	}
}
