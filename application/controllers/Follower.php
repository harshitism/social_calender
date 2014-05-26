<?php
/*	Controller for follower page 
Name : Follower
*/

class Follower extends CI_Controller{
<<<<<<< HEAD
	public function __construct()
		{
			parent::__construct();
		}
	/* function which loads followers of a given user_id to view "follower"*/
function extract_follower($user_id)
	{
		$this->load->model('Md_follower');
		$newarr = array('newarr' => $this->Md_follower->extract_follower($user_id));
=======
	/*	function index()
	{
		$this->load->view('follower');
	}*/
	/* function which loads followers of a given user_id to view "follower"*/
function extract_follower()
	{
		$this->load->model('Md_follower');
		$newarr = array('newarr' => $this->Md_follower->extract_follower());
>>>>>>> 867a096b0c20ee191cd93043ef21615912046a86
		$this->load->view('done',$newarr);
	}
}
?>