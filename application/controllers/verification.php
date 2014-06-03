<?php 
class Verification extends CI_Controller {


	public function __construct()
		{
			parent::__construct();
		}
		
	function index($hash)
	{
		$this->load->database();
		$exist = $this->db->query("SELECT * FROM user WHERE hash = '".$hash."'");
		if($exist->num_rows()==0)
		{
			$this->load->view('link_expired');
		}
		else
		{
		$this->db->query("UPDATE user SET verify = '1/1/1', hash='' where hash = '".$hash."'");
		$this->load->view('user_profile');
		}
	}
}
		
?>