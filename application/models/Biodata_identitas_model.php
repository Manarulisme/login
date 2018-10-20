<?php
class biodata_identitas_model extends CI_Model{
	public $nk;
	public $nama_lengkap;
	public $lulusan;

	public $labels = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();

		//memuat library database
		$this->load->database();
	}

	//metode untuk menambah baris data ke dalam tabel
	public function insert(){
		$sql=sprintf("INSERT INTO biodata_identitas VALUES('%s','%s',%f)", 
				$this->nk,
				$this->nama_lengkap,
				$this->lulusan
			
		);
	$this->db->query($sql);
	}

	//metode untuk mengubah baris data di dalam tabel
	public function update(){
		$sql = sprintf("UPDATE biodata_identitas SET nama_lengkap='%s', lulusan=%f".
					"WHERE nk='%s'",
				$this->nama_lengkap,
				$this->lulusan,
				$this->nk
			);
		$this->db->query($sql);	
	}

	//metode untuk menghapus baris data dari dalam tabel
	public function delete(){
		$sql = sprintf("DELETE FROM biodata_identitas". 
					"WHERE nk='%s'",
				$this->nk
				);
		$this->db->query($sql);
	}
	//metode untuk melakukan seleksi data
	public function read(){
		$sql="SELECT * FROM biodata_identitas ORDER BY nk";
		$query=$this->db->query($sql);
		return $query->result();
	}

	private function _attributeLabels(){
		return[
			'nk'=>'nk:',
			'nama_lengkap'=>'nama_lengkap',
			'lulusan'=>'lulusan Produk: '
		];
	}
	
}	