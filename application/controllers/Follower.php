<?php
/*	Controller for follower page 
Name : Follower
*/

class Follower extends CI_Controller{

	public function __construct()
		{
			parent::__construct();
		}
	/* function which loads followers of a given user_id to view "follower"*/
function extract_follower($user_id)
	{
		$this->load->model('Md_follower');
		$newarr = array('newarr' => $this->Md_follower->extract_follower($user_id));

		$this->load->view('done',$newarr);
	}
}
?>