<?php
/*	Controller for follower page 
Name : Follower
*/

class Follower extends CI_Controller{
	/*	function index()
	{
		$this->load->view('follower');
	}*/
	/* function which loads followers of a given user_id to view "follower"*/
function extract_follower()
	{
		$this->load->model('Md_follower');
		$newarr = array('newarr' => $this->Md_follower->extract_follower());
		$this->load->view('done',$newarr);
	}
}
?>