<?php 

class M_data extends CI_Model{
	public function data_user(){
		$query = $this->db->query("SELECT *FROM tb_data");
		return $query->result();
	}

}

?>
