<?php
	class Cn_reset_password extends CI_controller{
	
	public function __construct()
		{
			parent::__construct();
		}
	function index($hash)
	{
		//$this->load->helper(array('form', 'url'));
		//$this->load->view('reset_password');
		
		$this->load->database();
		
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('password','Password','required|matches(con_password)');
		
		$parameter = array(
		'password' => $this->input->post('password')
		);
		
		$data['hash']=$hash;
		
		if($this->form_validation->run()==FALSE)
		{
		$this->load->view('reset_password',$data);
		}
		else
		{
			$this->db->query("UPDATE user SET password = '".$parameter['password']."', hash='' where hash = '".$hash."'");
			$this->load->view('password_reset');
			//$this->load->model('md_reset_password');
			//$value = $this->md_reset_password->index($hash,$password);
			
		}
	}
}
?>
	