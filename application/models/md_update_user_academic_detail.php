<?php
class Update_user_academic_detail extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function check_params($params)
	{

		//the validation of all params can be checked in controller

	}
	public function update_record($param,$userid)
	{
		$this->load->database();
		// Assuming that $params is the string containing user info separated by ",".
		// Separate it from "," and add it to the user_detail table.	

		$array = explode(",",$params);

		$query = $this->db->query("UPDATE user_academics SET school_attended='".$array[1]."',college_name='".$array[2]."',degree_type='".$array[3]."',stream_name='".$array[4]."',current_year='".$array[5]."',expected_passout_year='".$array[6]."',highest_qualification='".$array[7]."',class_12_10_detail='".$array[8]."',technical_skills='".$array[9]."',projects='".$array[10]."' WHERE id='".$userid."'");



		if($this->db->affected_rows())
		{
			return 1;
		}
		else
		{
			return 0;
		}


	}

}
?>
