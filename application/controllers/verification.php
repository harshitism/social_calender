<?php 
class Verification extends CI_Controller {


	public function __construct()
		{
			parent::__construct();
		}
		
	function index($hash)
       	{
		$this->load->database();
		//echo "hello";
		$exist = $this->db->query("SELECT * FROM user WHERE hash = '".$hash."'");
		if($exist->num_rows()==0)
		{
			echo "invalid code";
			//$this->load->view('done1');
			return 0;
		}
		$this->db->query("UPDATE user SET verify = '1/1/1' where hash = '".$hash."'");
		$this->load->view('done1');
	}
}
		
?>