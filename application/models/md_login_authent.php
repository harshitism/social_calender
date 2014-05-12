<?php

class Check_User_Authentication extends CI_Model {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	public function check_user_authentication($username, $password, $college_name) {
		// Check the authentication of user. If the username and passeord matches, get the user id 
                // and fetch the college name using user id. If it matches the college name provided by user, 
                // the function returns the id of user otherwise -1.

		$this->load->database();
		$query = $this->db->query("select * from user_detail where user_name = '".$username."', password = '".$password."'");
		$row = $query->result();
			$id = $row->id;
		if (!$id)
			return -1;
		$array = array('id' => $id);
		$query = $this->db->query("select * from user_academics where id = '".$id."'");
 		$row = $query->result();
			$college = $row->college_name;
		if ($college != $college_name)
			return -1;

		return $id;

	}

	public function is_user_verified($userid){
                // Check whether the user has verified his account or not.

		$this->load->database();
		$query = $this->db->query("select * from user_detail where id = '".$userid."'");

		$row = $query->result();
		$status = $row->verify;

		if ($status == 1)
			return 1;

		return -1;

	}

	public function load_percent_profile_complete($userid){
		// Returns the percentage of the user's profile 
		// Name - 10%, college e-mail address (only verified or id card image if no college email) - 25%, Mobile number - 5%, College - 10%, Branch - 10%, Year - 10%, Current city – 5%, Gender – 10%, Profile image – 10%, Date of birth – 5%
       
		$this->load->database();
                $array   = array('id' => $userid);
                $query = $this->db->query("select * from user_detail where id = '".$userid."'");
		$row = $query->result_array();
		$percent = 0;
		if($row['user_name'])
			$percent+=10;
		if($row['email'] != NULL and $row['verify'] == 1)
			$percent+=25;
		if($row['contact_no'])
                        $percent+=5;
		if($row['home_town'])
                        $percent+=5;
		if($row['gender'])
                        $percent+=10;
		if($row['profile_image'])
                        $percent+=10;
		if($row['date_of_birth'])
                        $percent+=5;
		
		


		$query = $this->db->query("select * from user_academics where id = '".$userid."'");
		$row = $query->result_array();

		if($row['college_name'])
                        $percent+=10;
		if($row['stream_name'])
                        $percent+=10;
		if($row['current_year'])
                        $percent+=10;
		

		return $percent;

	}

	public function is_birthday_today($userid)
	{
                // Retrieves the birthdate of user from userid and checks it with today's date.
                // If it is equal, it will return 1 otherwise -1.

		$this->load->database();
		$query = $this->db->query("select * from user_detail where id = '".$userid."'");

		$row = $query->result();
		$birthday = $row->date_of_birth;
		$today = date(Y-m-d);
		if ($today == $birthday)
		{
			return 1;
		}
		return -1;
	}
}

