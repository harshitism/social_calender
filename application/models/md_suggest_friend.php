<?php 
class md_suggest_friend extends CI_model {

	public function __construct()
		{
			parent::__construct(); //calls the constructor 
		}
	
	public function get_suggestion($user_id)
	{
		$this->load->database();
		$query = $this->db->query("SELECT first_name,middle_name,last_name FROM user WHERE user_id in (SELECT following_id FROM following WHERE user_id IN (SELECT following_id FROM following WHERE user_id = '".$user_id."')) OR user_id in (SELECT follower_id FROM event_follower WHERE event_id IN (SELECT event_id FROM event_follower WHERE follower_id = '".$user_id."')) AND user_id<>'".$user_id."'");
		$this->load->library('table');
		//echo $this->table->generate($query);
		return $query->result();
	}
}
?>