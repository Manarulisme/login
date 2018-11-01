<?php
Class Biodata extends CI_Controller{
  public function index(){
    $this->load->model("Biodata_identitas_model");
    $data['data'] = $this->Biodata_identitas_model->load_alumni();

    $this->load->view("Dashboard_view",$data);
  }


  public function add(){ 
    $this->load->model("Biodata_identitas_model");
    $data['tipe'] = "Add";

    if(isset($_POST['tombol_submit'])){
      //proses simpan dilakukan
      $this->Biodata_identitas_model->simpan($_POST);
      redirect("biodata");
    }

    $this->load->view("Biodata_view",$data);
  }

  

  public function edit($id){
    $this->load->model("Biodata_identitas_model");
    $data['tipe'] = "Edit";
    $data['default'] = $this->Biodata_identitas_model->get_default($id);

    if(isset($_POST['tombol_submit'])){
      $this->Biodata_identitas_model->update($_POST, $id);
      redirect("biodata");
    }

    $this->load->view("Biodata_view",$data);
  }


  public function delete($id){
    $this->load->model("Biodata_identitas_model");
    $this->Biodata_identitas_model->hapus($id);
    redirect("biodata");
  }



}