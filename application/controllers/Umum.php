<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller {


  function Index(){
    //Allowing akses to admin only
        $this->load->model("Biodata_identitas_model");
          $data['list_alumni'] = $this->Biodata_identitas_model->load_alumni();
      	$this->load->view('Umum_view', $data);

  }



}