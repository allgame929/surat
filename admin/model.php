<?php 
class model_mutasi extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}

	function get_mutasi(){
    $query = $this->db->get('warga');
    return $query->result_array();
}
}
?> 