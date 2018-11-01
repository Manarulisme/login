<?php
class Pencarian extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("Biodata_identitas_model");
	}
 
	public function cari() 
	{
		$this->load->view('search');
	}
 
	public function hasil()
	{
		$data2['cari'] = $this->Biodata_identitas_model->cariOrang();
		$this->load->view('result', $data2);

	}
}