<?php
//this model is used to authenticate the user which is trying to login by checking if given username and passwords are same.
class Md_login extends CI_Model {

	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	//function md_login used to obtain user_id of a user if he entered correct username and password otherwise it returns 0.
	public function login($uname,$password)
	{
		
		$this->load->database();
		$query = $this->db->query("SELECT user_id,verify from user where (email = '".$uname."' and password = '".$password."') or (contact = '".$uname."' and password = '".$password."')");
		foreach( $query->result() as $row)
		{
			if($row->verify=='1/1/1')
			return $row->user_id;
			else
			return -1;
			}
		return 0;
	}
}
?>