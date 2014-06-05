<?php
class Md_reset extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	public function index($email)
	{
		
		$this->load->database();
		$query = $this->db->query("SELECT user_id from user where (email = '".$email."')");
		if (!$query)
		return 0;
		else
		{
		foreach( $query->result() as $row)
		{
			$hash = md5( rand(0,1000) );
			$this->db->query("UPDATE user SET hash = '".$hash."' where (email = '".$email."')");
			$message = " To reset your account password, please click on this link:\n\n";
			$message = '
 
				
			http://localhost/social_startup/index.php/cn_reset_password/index/'.$hash.'';
	                
	        mail($email, 'Password reset', $message, "From:social_calender");
			return 1;
		}
		}
	}
}
?>