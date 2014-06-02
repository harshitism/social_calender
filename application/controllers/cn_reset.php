<?php
class cn_reset extends CI_controller
{

	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		
		$parameter = array(
		'email' => $this->input->post('user_email')
		);
		
		$this->form_validation->set_rules('user_email','EMAIL','required|valid_email');
		
		if($this->form_validation->run()== FALSE)
		{
			$this->load->view('forgot_password');
		}
		
		$this->load->model('md_reset');
		$value = $this->md_reset->index($parameter['email']);
		
		if($value==0)
		{
		$data['error']='Invalid account';
		$this->load->view('forgot_password');//,$data);
		}
		else
		{
		$this->load->view('done1');
		}	
	}
}
?>