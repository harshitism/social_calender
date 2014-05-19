<?php

class Create_new_user extends CI_Model {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function insert_record($params)
	{
		// Assuming that $params is the string containing user info separated by ",".
		// Separate it from "," and add it to the user_detail table.	
		$this->load->database();
		$array = explode(",",$params);

		$query = $this->db->insert("INSERT INTO user_detail (`id`, `user_name`, `email`, `display_name`, `age`, `gender`, `date_of_birth`, `home_town`, `date_of_join`, `password`, `verify`, `contact_no`, `lang_known`, `profile_image`, `communication_address`, `Membership`, `other_details`) values ('".$array[0]."','".$array[1]."','".$array[2]."','".$array[3]."','".$array[4]."','".$array[5]."','".$array[6]."','".$array[7]."','".$array[8]."','".$array[9]."','".$array[10]."','".$array[11]."','".$array[12]."','".$array[13]."','".$array[14]."','".$array[15]."','".$array[16]."')");

		if($this->db->affected_rows() == 1)
			return 1;

		return -1;
	}

	public function insert_record_from_facebook($params)
	{
		//Needs to be implemented. Not clear why we need $params as arguments. I don't think, it will need any arguments.
	}

	public function send_verification_mail($userid, $user_email)
	{	
		// Send the confirmation link to the user on his provided email.

		$url = "http://localhost:";	 //temporary url link. (Should be modified later)
		$browseboard_email = "";         // Email address of browseboard or sender. Needs to be filled.
		$activation = md5(uniqid(rand(), true));
		$message = "To activate your account, please click on this link:\n\n"; // Confirmayion message
		$message .= $url . '/activate.php?email=' . urlencode($user_email1) . "&key=$activation"; //Confirmation message

		mail($user_email, 'Registration Confirmation', $message, 'From:'.$browseboard_mail);
	}	
}
