<?php
class Md_profile extends CI_Model {
	public function _construct() {
		parent::__construct();
	}
	public function get_name($user_id)
	{
		$this->load->database();
		$this->db->where('user_id',$user_id);
		$this->db->select('*');
		$nm = $this->db->get('user');
		foreach($nm->result() as $row)
		{
		$name = $row->first_name;
		if($row->middle_name!="")
		$name = $name." ".$row->middle_name;
		if($row->last_name!="")
		$name = $name." ".$row->last_name;
		return $name;
		}
	}
}