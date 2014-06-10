<?php
class Searchbar extends CI_Controller {
	public function index()
	{
		$this->load->view('search_form');
	}
	public function search()
	{
		$this->load->helper(array('form', 'url'));
		$item = $this->input->post('search');
		$this->load->model('Md_searchbar');
		$res = $this->Md_searchbar->get_search($item);
		if($res==-1)
		{
			$data['error'] = "Please enter a search query!!!";
			$this->load->view('search_form',$data);
		}
		else if($res==0)
		{
			$data['result'] = "NO results!!!";
			$this->load->view('search_form',$data);
		}
		else
		{
			$this->load->model('Md_profile');
			$no = count($res);
			for($i=0;$i<$no;$i++)
			{
				$new_arr[$i] = $this->Md_profile->get_info($res[$i]['user_id']);
			}
			$arr = array('arr' => $new_arr);
			$this->load->view('search_result',$arr);
		}
	}
}
?>