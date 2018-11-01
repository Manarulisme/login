<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
 <!--    <link href="<?php echo base_url('assets/js/style.js');?>" rel="stylesheet"> -->
  </head>
  <body style="background-color: #f3f3f3; ">
    
    <div class="container-fluid">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>   
 
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/js/bootstrap.min.js" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/style.js');?>"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- Ini adalah bagian Judul Navbar-->
  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
      <span class="navbar-toggler-icon leftmenutrigger"></span>
      <a class="navbar-brand" href="page">Aplikasi Pengarsipan Data Alumni MAN Purwakarta</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Ini adalah bagian Sidebar -->
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="page" title="Beranda"><i class="fa fa-home"></i> Beranda <i class="fa fa-home shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page/add" title="Tambah"><i class="fa fa-plus-circle"></i> Tambah Data<i class="fa fa-plus-circle shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pencarian/cari" title="cari_alumni"><i class="fa fa-search"></i> Cari Alumni<i class="fa fa-search shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Cetak" title="Cetak"><i class="fa fa-print"></i> Cetak Laporan<i class="fa fa-print shortmenu animate"></i></a>
          </li>
        </ul>
        <!-- Ini adalah bagian Navbar -->
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user"></i> Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login"><i class="fas fa-key"></i>  Logout</a>
          </li>
        </ul>
      </div>
    </nav>
<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Cetak Laporan </h5>
                
      <div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" style="width: 70%;">
    <thead>
      <tr style="text-align: center;">
        <th width="300px">Jenis Cetakan</th>
        <th width="50px">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <!-- ISI DATA AKAN MUNCUL DISINI -->
    

        <tr>
          <td>Cetak Semua</td>
          <td><a href='Cetak/cetak_all' class='btn btn-sm btn-info' align='center'>Cetak</a></td></tr></br>
        <tr>  
          <td>Cetak Berdasarkan Jenis Kelamin</td>
          <td><a href='Cetak/cetak_jk' class='btn btn-sm btn-info'>Cetak</a></td><br>
        </tr>
    </tbody>
  </table>
</div>
       
            </div>
          </div>
        </div>

      </div>
    </div>


  </div>
  <script defer src="<?php echo base_url('assets/js/all.js');?>"></script>
 
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
               <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/js/bootstrap.min.js" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/style.js');?>"></script>
<!------ Include the above in your HEAD tag ---------->

  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
      <span class="navbar-toggler-icon leftmenutrigger"></span>
      <a class="navbar-brand" href="#">Aplikasi Pengarsipan Data Alumni MAN Purwakarta</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" title="Beranda"><i class="fa fa-home"></i> Beranda <i class="fa fa-home shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Cetak"><i class="fa fa-print"></i> Cetak Data<i class="fa fa-print shortmenu animate"></i></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user"></i> Petugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/login"><i class="fas fa-key"></i>  Logout</a>
          </li>
        </ul>
      </div>
    </nav>

<div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Alumni</h5>
                <p>
                  <div class="row col col-md-offset-2 custyle">
    <table class="table table-striped custab" style="font-size: 12px;">
    <thead>
    
        <tr>
            <th>NK</th>
            <th>FOTO</th>
            <th>NAMA LENGKAP</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT LENGKAP</th>
            <th>LULUSAN</th>
            <th>PEKERJAAN</th>
            <th>KONTAK HP</th>
            <th>EMAIL</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
            <tr>
                <td>20132015001</td>
                <td>Manarul</td>
                <td>Manarul Huda</td>
                <td>Laki-laki</td>
                <td>Purwakarta</td>
                <td>2015</td>
                <td>Mahasiswa</td>
                <td>+6283817353484</td>
                <td>manarulhuda57@gmail.com</td>

                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
           
    </table>
    </div>

    
      </div>

  <script defer src="<?php echo base_url('assets/js/all.js');?>"></script>

                <?php endif;?>
      
                 
          
       
 
     
    </div>
  </body>
</html>

