<?php
class Crud extends CI_Controller{
	public $model=NULL;

	public function __construct(){
		parent:: __construct();
		//memuat model
		$this->load->model('biodata_identitas_model');
		$this->model = $this->biodata_identitas_model;
	//memuat library database
	$this->load->database();
	//memuat helper URL
	$this->load->helper('url'); //untuk redirect()
	}

	public function index(){
		$this->read();
	}

	public function create(){
		if (isset ($_POST['btnSubmit'])){
			$this->model->nk =$_POST['nk'];
			$this->model->nama_lengkap =$_POST['nama_lengkap'];
			$this->model->lulusan =$_POST['lulusan'];
			$this->model->insert();
			redirect('Crud/index');
		} else{
			$this->load->view('Crud_create_view',['model'=>$this->model]);
		}	
	}
	public function read(){
		$rows=$this->model->read();
		$this->load->view('Crud_read_view', ['rows'=>$rows]);
	}

	public function update($nk){
		if(isset($_POST['btnSubmit'])){
			$this->model->nk =$_POST['nk'];
			$this->model->nama_lengkap =$_POST['nama_lengkap'];
			$this->model->lulusan =$_POST['lulusan'];
			$this->model->update();
			redirect('crud/index');
		}
		else{
			$query = $this->db->query("SELECT * FROM biodata_identitas WHERE nk='$nk'");
			//if ($query->num_rows() == 0) exit(1);
			$row = $query->row();
			$this->model->nk =$_POST['nk'];
			$this->model->nama_lengkap =$_POST['nama_lengkap'];
			$this->model->lulusan =$_POST['lulusan'];
			$this->load->view('Crud_update_view', ['model'=>$this->model]);
		}
	}
	public function delete($nk){
		//menetukan nk yang akan dihapus
		$this->model->nk =$nk;
		//menghapus baris data di dalam tabel barang
		$this->model->delete();
		//mengarahkan kembali ke halaman utama
		redirect('crud/index');
	}
}