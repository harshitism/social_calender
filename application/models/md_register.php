<?php
class Md_register extends CI_Model {
	public function __construct()
	{
			//call the model constructor
			parent::__construct();
	}
	//function md_register called as md_register("first_name,middle_name,last_name,email,dob,contact,password,confirmed_password,gender")
	public function md_register($params)
	{
		//all the arguements are considered as a string of user info separated by ",".
		//explode function is used to fetch distinct info from $params.
		$this->load->database();
		$info = explode(",",$params);
		//check if a user is registered with this email id
		$exist = $this->db->query("SELECT * FROM user WHERE email = '".$info[3]."'");
		if($exist->num_rows()==0)
		{
			//validate email and check if password and confirmed password are same
			if(filter_var($info[3], FILTER_VALIDATE_EMAIL)/*&& $info[6]==$info[7]*/)
			{
				$name = $info[0].$info[1].$info[2];
				if(ctype_alpha($name))     //checks if name has only characters
				{
					$query = $this->db->query("INSERT INTO user (first_name,middle_name,last_name,email,dob,contact,password,gender) values ('".$info[0]."','".$info[1]."','".$info[2]."','".$info[3]."','".$info[4]."','".$info[5]."','".$info[6]."','".$info[7]."')");
					if($this->db->affected_rows() == 1)
					return 1;			//return 1 if info is inserted
					else
					return 0;			//return 0 if info is not inserted
				}
				else
				return 0;				//return 0 if name is wrong
			}
			else
			return 0;					//return 0 if email is not validated or password and confirmed password are different
		}
		else
		return 0;						//return 0 if this email id is already used
	}
}
?>