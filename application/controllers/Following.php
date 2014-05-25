<?php
/*	Controller for following page 
Name : Following
*/

class Following extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			
		}
	/*function index()
	{
		$this->load->view('following');
	}*/
/*Function : add_following used to add a follwong of a user*/		
	function add_following($following_id)
	{	
			/*arguments of the function will be removed and these comments will be uncommented*/
			//following_id = $this->input->post('following_id');
			$this->load->model('Md_following');
			$succ = $this->Md_following->add_following($following_id);
			if($succ==1)
			{
				$data['succ']="you are now following ".$following_id."";
				$this->load->view('done1',$data);
			}
			else
			{
				$data['succ'] = "already followed";
				$this->load->view('done1',$data);
			}
	}

/*	Function name : del_following
Function : used to delete a following of user*/
	
	function del_following($following_id)
	{	
			/*arguments of the function will be removed and these comments will be uncommented*/
			//following_id = $this->input->post('following_id');
			$this->load->model('Md_following');
			$succ = $this->Md_following->del_following($following_id);
			if($succ==1)
			{
				$data['succ']="you have successfully removed ".$following_id." from his followings.";
				$this->load->view('done1',$data);
			}
			else
			{
				$data['fail'] = "can't remove from your followings";
				$this->load->view('following',$data);
			}
	}
/* function which loads followings of a given user_id to view "following"*/
function extract_following()
	{
		$this->load->model('Md_following');
		$arr = array('arr' => $this->Md_following->extract_following());
		$this->load->view('done',$arr);
	}
}
?>