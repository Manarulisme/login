<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Biodata_identitas_model extends CI_Model{

	public function load_alumni(){
		$sql = $this->db->query("SELECT * FROM biodata_identitas WHERE flag = 1");
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama_lengkap = $this->db->escape($post['nama_lengkap']);
		$jk = $this->db->escape($post['jk']);
		$alamat = $this->db->escape($post['alamat']);
		$lulusan = $this->db->escape($post['lulusan']);
		$pekerjaan = $this->db->escape($post['pekerjaan']);
		$kontak_hp = $this->db->escape($post['kontak_hp']);
		$email = $this->db->escape($post['email']);
		$foto = $this->db->escape($post['foto']);

		$sql = $this->db->query("INSERT INTO Biodata_identitas VALUES (NULL, $nama_lengkap, $jk, $alamat, $lulusan, $pekerjaan, $kontak_hp, $email, $foto, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM biodata_identitas WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama_lengkap = $this->db->escape($post['nama_lengkap']);
		$jk = $this->db->escape($post['jk']);
		$alamat = $this->db->escape($post['alamat']);
		$lulusan = $this->db->escape($post['lulusan']);
		$pekerjaan = $this->db->escape($post['pekerjaan']);
		$kontak_hp = $this->db->escape($post['email']);
		$email = $this->db->escape($post['email']);
		$foto = $this->db->escape($post['foto']);

		$sql = $this->db->query("UPDATE Biodata_identitas SET nama_lengkap = $nama_lengkap, jk = $jk, alamat = $alamat, lulusan = $lulusan, pekerjaan = $pekerjaan, kontak_hp = $kontak_hp, email = $email, foto = $foto WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("UPDATE Biodata_identitas SET flag = 0 WHERE id = ".intval($id));
	}	

	public function cetak_all(){
		$sql = $this->db->query("SELECT * FROM biodata_identitas WHERE flag = 1 ORDER BY lulusan ASC, jk ASC, nama_lengkap ASC");
		return $sql->result_array();
	}

	public function cetak_jk(){
				$sql = $this->db->query("SELECT id, foto, nama_lengkap, jk  FROM biodata_identitas  WHERE flag = 1  ORDER BY jk ASC, nama_lengkap ASC");
		return $sql->result_array();
	}


	public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from Biodata_identitas where nama_lengkap like '%$cari%' ");
		return $data->result();
	}


		function data($number,$offset){
		return $query = $this->db->get('Biodata_identitas',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('Biodata_identitas')->num_rows();
	}

}