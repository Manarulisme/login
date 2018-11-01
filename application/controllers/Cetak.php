<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {


  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
      	$this->load->view('Cetak_list_view');

      }else{
          echo "Access Denied";
      }
  }

  function cetak_all(){
          $this->load->model("Biodata_identitas_model");
          $data['list_alumni'] = $this->Biodata_identitas_model->cetak_all();
           $this->load->view('Cetak_all_view', $data);

  }


function cetak_jk(){
		$this->load->model("Biodata_identitas_model");
		$data['list_alumni'] = $this->Biodata_identitas_model->cetak_jk();
        $this->load->view('Cetak_jk_view', $data);
}

}