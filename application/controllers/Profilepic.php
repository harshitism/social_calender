<?php
class Profilepic extends CI_Controller{
function index()
	{
		$this->load->view('profilepic');
	}
	function upload()
	{
		$this->load->helper(array('form', 'url'));
				$config['upload_path'] = './assets/uploads/profilepics/';
				$config['allowed_types'] = 'jpg|jpeg|gif|png';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('pic'))
				{
					$data['succ'] = $this->upload->display_errors();
					$this->load->view('done1',$data);
				}
				else
				{
					$upload_data = $this->upload->data(); 
  					$file_name =   $upload_data['file_name'];
					$this->load->model('Md_profilepic');
					if($this->Md_profilepic->change_profilepic($file_name))
					{
						redirect('/Profile_currentuser');
					}
					else
					{
						$data['succ'] = "failed";
						$this->load->view('done1',$data);
					}
				}				
	}
}
?>