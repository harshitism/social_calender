<?php
/*	Controller for comment page 
Name : Comment
*/

class Comment extends CI_Controller{
	/*function index()
	{
		$this->load->view('some_view');
	}*/
/*Function : add_comment used to add a comment*/		
	function add_comment($event_id)
	{	
			/*arguments of the function will be removed and these comments will be uncommented*/
			//$eevent_id = $this->input->post('event_id');
			$comment = $this->input->post('comment');
			$array = array('comment' => $comment, 'event_id' => $event_id);
			$param = implode(",",$array);
			$this->load->model('Md_comment');
			$succ = $this->Md_comment->add_comment($param);
			if($succ==1)
			{
				$data['succ']="comment added";
				$this->load->view('done1',$data);
			}
			else
			{
				$data['succ'] = "can't comment";
				$this->load->view('done1',$data);
			}
	}

/*	Function name : del_comment
Function : used to delete a comment*/
	
	function del_comment($comment_id)
	{	
			/*arguments of the function will be removed and these comments will be uncommented*/
			//$comment_id = $this->input->post('comment_id');
			$this->load->model('Md_comment');
			$succ = $this->Md_comment->del_comment($comment_id);
			if($succ==1)
			{
				$data['succ']="comment successfully deleted";
				$this->load->view('done1',$data);
			}
			else
			{
				$data['succ'] = "can't remove from your followings";
				$this->load->view('done1',$data);
			}
	}
	/*Function : edit_comment used to update a comment*/		
	function edit_comment($comment_id)
	{	
			/*arguments of the function will be removed and these comments will be uncommented*/
			//$comment_id = $this->input->post('comment_id');
			$newcomment = $this->input->post('comment');
			$array = array('newcomment' => $newcomment, 'comment_id' => $comment_id);
			$param = implode(",",$array);
			$this->load->model('Md_comment');
			$succ = $this->Md_comment->edit_comment($param);
			if($succ==1)
			{
				$data['succ']="comment updated";
				$this->load->view('done1',$data);
			}
			else
			{
				$data['succ'] = "can't update";
				$this->load->view('done1',$data);
			}
	}
	/*Function : get_comment used to get all comments of an event*/
	function get_comment($event_id)
	{	
			/*arguments of the function will be removed and these comments will be uncommented*/
			//$event_id = $this->input->post('event_id');
			$this->load->model('Md_comment');
			$arr = $this->Md_comment->get_comment($event_id);
			$newarr = array('newarr' => $arr);
			$this->load->view('done2',$newarr);
	}
/* function which gives comment_id from event_id,time*/
function get_commentid($event_id,$time)
	{
		$array = array('event_id' => $event_id, 'time' => $time);
		$param = implode(",",$array);
		$this->load->model('Md_comment');
		$data['comment_id'] = $this->Md_comment->get_commentid($param);
		$this->load->view('done',$data);
	}
}
?>