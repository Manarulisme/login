<?php
class Orang_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from dborang where Name like '%$cari%' ");
		return $data->result();
	}
 
 
}