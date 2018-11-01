<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //load libary pagination
        $this->load->library('pagination');

    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
           $this->load->helper(array('url'));
          $this->load->model("Biodata_identitas_model");
          $data['list_alumni'] = $this->Biodata_identitas_model->load_alumni();

    $jumlah_data = $this->Biodata_identitas_model->jumlah_data();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'index.php/page';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = 4;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);   
    $data['user'] = $this->Biodata_identitas_model->data($config['per_page'],$from);
    $this->load->view('dashboard_view',$data);


      }else{
          echo "Access Denied";
      }
  }



  public function edit($id){
    $this->load->model("Biodata_identitas_model");
    $data['tipe'] = "Edit";
    $data['default'] = $this->Biodata_identitas_model->get_default($id);

    if(isset($_POST['tombol_submit'])){
      $this->Biodata_identitas_model->update($_POST, $id);
      redirect("page");
    }

    $this->load->view("Biodata_view1",$data);
  }


  public function delete($id){
    $this->load->model("Biodata_identitas_model");
    $this->Biodata_identitas_model->hapus($id);
    redirect("page");
  }
  
public function add(){
    $this->load->model("Biodata_identitas_model");
    $data['tipe'] = "Add";

    if(isset($_POST['tombol_submit'])){
      //proses simpan dilakukan
      $this->Biodata_identitas_model->simpan($_POST);
      redirect("page");
    }

    $this->load->view("Biodata_view1",$data);
  }

public function batal(){
  $this->load->view('dashboard_view');
}


  function staff(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='2'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }




  

}
