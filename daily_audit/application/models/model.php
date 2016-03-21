<?php


class Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function insert($table,$data)
	{
		$query = $this->db->insert($table,$data);

		if ($query)
		 {
			return true;
		}
		else
		{
			return false;
		}
	}
}


?>