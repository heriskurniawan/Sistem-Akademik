<?php 
class Model_select extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}

	function get_rombel()
	{
    	$query = $this->db->query('SELECT * FROM tbl_rombel');
    	return $this->db->query($query)->result();
	}
}
?> 