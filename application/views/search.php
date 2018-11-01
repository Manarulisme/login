<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body style="height: 100%;">
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
            <a class="nav-link" href="index.php/page" title="Beranda"><i class="fa fa-home"></i> Beranda <i class="fa fa-home shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php/page/add" title="Tambah"><i class="fa fa-plus-circle"></i> Tambah Data<i class="fa fa-plus-circle shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php/Pencarian/cari" title="cari_alumni"><i class="fa fa-search"></i> Cari Alumni<i class="fa fa-search shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php/Cetak" title="Cetak"><i class="fa fa-print"></i> Cetak Laporan<i class="fa fa-print shortmenu animate"></i></a>
          </li>
        </ul>
        <!-- Ini adalah bagian Navbar -->
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user"></i> Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php/login"><i class="fas fa-key"></i>  Logout</a>
          </li>
        </ul>
      </div>
    </nav>

	<div class="container">
		<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
            	<div class="card-title">
		<h1>Cari Alumni</h1>
		</div>	
	</div>


			<form action="<?php echo base_url('index.php/pencarian/hasil')?>" action="GET">
				<div class="form-group" style="text-align: center;">
					<label for="cari">Cari Nama Alumni</label><br/>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Nama Lengkap" style="width: 50%;">
				</div>
				<input class="btn btn-primary" type="submit" value="Cari" style="margin: 0% 30% 23% 41%;">
			</form>
  </div>
          </div>
        </div>

      </div>
    </div>


  </div>
  <script defer src="<?php echo base_url('assets/js/all.js');?>"></script>
</body>
</html>
