<?php
class Profile_currentuser extends CI_Controller {
	public function index() {
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$data['user_id'] = $user_id;
		$this->load->model('Md_profile');
		$data['name'] = $this->Md_profile->get_name($user_id);
		$this->load->model('Md_event');
		$even = $this->Md_event->get_event($user_id);
		//$even = array(array("sem prep","fghgh"),array("sem exam","jgffjgjh"),array("sem res","gugugu"));
		$data['events'] = $even;
		$this->load->model('Md_following');
		$fol = $this->Md_following->extract_following($user_id);
		$data['followings'] = count($fol);
		$this->load->model('Md_follower');
		$fol_arr = $this->Md_follower->extract_follower($user_id);
		$data['followers'] = count($fol_arr);
		$this->load->model('Md_friend');
		$frnd_arr = $this->Md_friend->extract_friend($user_id);
		$data['friends'] = count($frnd_arr);
		$this->load->view('profile',$data);
	}
}