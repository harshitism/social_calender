<?php
class cn_suggest_friend extends CI_controller{
	public function __constructor()
	{
		parent::__constructor();
	}
	public function index()
	{
	$this->load->library('session');
	$this->load->model('md_suggest_friend');
	$value['suggest'] = $this->md_suggest_friend->get_suggestion($this->session->userdata('user_id'));
	$this->load->view('done2',$value);
	}
}