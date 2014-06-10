<?php
class Md_searchbar extends CI_Model {
	public function __construct()
	{
		//model constructor
		parent::__construct();
	}
	public function get_search($item)
	{
		if($item!="")
		{
			$this->load->database();
			$exact_query = "SELECT user_id FROM user WHERE verify = '1/1/1' AND (CONCAT(first_name,' ',middle_name,' ',last_name) = '".$item."' OR CONCAT(first_name,' ',last_name) = '".$item."' OR email = '".$item."' OR contact = '".$item."')";
			$matching_query = "SELECT user_id FROM user WHERE verify = '1/1/1' AND ((CONCAT(first_name,' ',middle_name,' ',last_name) LIKE '%".$item."%' AND CONCAT(first_name,' ',middle_name,' ',last_name) <> '".$item."') OR (CONCAT(first_name,' ',last_name) LIKE '%".$item."%' AND CONCAT(first_name,' ',last_name) <> '".$item."') OR (email LIKE '%".$item."%' AND email <> '".$item."') OR (contact LIKE '%".$item."%' AND contact <> '".$item."'))";
			$exact_res = $this->db->query($exact_query);
			$matching_res = $this->db->query($matching_query);
			if($exact_res->num_rows()!=0||$matching_res->num_rows()!=0)
			{
				$i = 0;
				foreach ($exact_res->result() as $row)
				{
					$arr[$i]['user_id'] = $row->user_id;
					$i++;
				}
				foreach ($matching_res->result() as $row)
				{
					$arr[$i]['user_id'] = $row->user_id;
					$i++;
				}
				return $arr;				
			}
			else
			return 0 ;
		}
		else
		return -1;
	}
}
?>