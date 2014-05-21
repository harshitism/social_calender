<?php
class Md_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function md_login($params)
	{
		$login = explode(",",$params);
		$this->load->database();
		$query = $this->db->query("select user_id from user where (email = '".$login[0]."' and password = '".$login[1]."') or (contact = '".$login[0]."' and password = '".$login[1]."')");
		$res = $query->row();
		if($query->num_rows()>0)
		{
			$id = $res->user_id;
			if(!$id)
			return 0;
			else
			return $id;
		}
		else
		return 0;
	}
}
?>