<?php
//Model md_register validates name and email of the user whether it is according to database or not and inserts info of the user in table user.

class Md_register extends CI_Model {

	public function __construct()
	{
			//call the model constructor
			parent::__construct();
	}
	//function md_register called as md_register("first_name,middle_name,last_name,email,dob,contact,password,gender"), used to insert info of the user in the database which is trying to register.
	public function register($params)
	{
		//all the arguements are considered as a string of user info separated by ",".
		//explode function is used to fetch distinct info from $params.
		$this->load->database();
		$info = explode(",",$params);

		//check if a user is registered with this email id or phone
		$email_exist = $this->db->query("SELECT * FROM user WHERE email = '".$info[3]."'");
		$phone_exist = $this->db->query("SELECT * FROM user WHERE contact = '".$info[5]."'");
		
		
		
		if($email_exist->num_rows() == 0 && $phone_exist->num_rows() ==0)
		{
			
			//validate email
			if(filter_var($info[3], FILTER_VALIDATE_EMAIL))
			{
				$name = $info[0].$info[1].$info[2];
				if(ctype_alpha($name))     //checks if name has only characters
				{

					$hash = md5( rand(0,1000) );
					$query = $this->db->query("INSERT INTO user (first_name,middle_name,last_name,email,dob,contact,password,gender,hash) VALUES ('".$info[0]."','".$info[1]."','".$info[2]."','".$info[3]."','".$info[4]."','".$info[5]."','".$info[6]."','".$info[7]."','".$hash."')");
					if($this->db->affected_rows() >= 1)
					{
					$message = " To activate your account, please click on this link:\n\n";
					$message = '
 
					Thanks for signing up!
					Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
					------------------------
					Username: '.$info[3].'
					Password: '.$info[6].'
					------------------------
 
					Please click this link to activate your account:
					'.$this->config->base_url().'index.php/verification/index/'.$hash.'';
	               
	                mail($info[3], 'Registration Confirmation', $message, "From:social_calender");
					return 1;			//return 1 if info is inserted
					}
					else
					return 2;			//return 0 if info is not inserted
				}
				else
				return 3;				//return 0 if name is wrong
			}
			else
			return 4;					//return 0 if email is not validated
		}
		else if($email_exist->num_rows() > 0)
		{
			return 5;
			
		}
		else if($phone_exist->num_rows() > 0)
		{
			return 6;
			
		}
			
			/*
			foreach( $email_exist->result() as $row)
			{
			if($row->verify=='1/1/1')
			{
				echo "user already exist";
				return 0;
			}
			else
			{
					$hash = md5( rand(0,1000) );
					//$query = $this->db->query("INSERT INTO user (first_name,middle_name,last_name,email,dob,contact,password,gender,hash) values ('".$info[0]."','".$info[1]."','".$info[2]."','".$info[3]."','".$info[4]."','".$info[5]."','".$info[6]."','".$info[7]."','".$hash."')");
					$this->db->query("UPDATE user SET hash = '".$hash."'  WHERE email = '".$info[3]."'");
					if($this->db->affected_rows() == 1)
					{
					$message = " To activate your account, please click on this link:\n\n";
					$message = '
 
					Thanks for signing up!
					Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
					------------------------
					Username: '.$info[3].'
					Password: '.$info[6].'
					------------------------
 
					Please click this link to activate your account:
					http://localhost/social_startup/index.php/verification/index/'.$hash.'';
	               
	                mail($info[3], 'Registration Confirmation', $message, "From:social_calender");
					echo "user exist but email verification needed";
					return 0;
					}
			}
			
			
		}*/
	
	}
}

?>