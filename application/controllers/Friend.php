<?php
class Friend extends CI_Controller{
	/*	function index()
	{
		$this->load->view('follower');
	}*/
	/* function which loads followers of a given user_id to view "follower"*/
function extract_friend($user_id)
	{
		$this->load->model('Md_friend');
		$naarr = array('naarr' => $this->Md_friend->extract_friend($user_id));
		$this->load->view('done',$naarr);
	}
}
?>