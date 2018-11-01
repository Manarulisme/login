<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body style="height: auto;">
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

	<div class="container">
		<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
            	<div class="card-title">
		<h1>Tambah Alumni</h1>
		</div>
		<form method="post" class="form-horizontal" style="text-align: left;">
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Lengkap
				</label>
				<div class="col-md-6 control-label" for="nama_lengkap">
					<input type="text" class="form-control" placeholder="Sesuai KTP" name="nama_lengkap" value="<?=isset($default['nama_lengkap'])? $default['nama_lengkap'] : ""?>">
				</div>
			</div>

<div class="form-group">
	  <label class="col-md-4 control-label" for="jk">Jenis Kelamin</label>
	  <div class="col-md-3">
	    <select id="jk" name="jk" class="form-control">
	      <option value="1">Laki - laki</option>
	      <option value="2">Perempuan</option>
	      <?=isset($default['jk'])? $default['jk'] : ""?>
	    </select>
	  </div>
	</div>


			<div class="form-group">
				<label class="control-label col-sm-2">
					Alamat Lengkap		
				</label>
				<div class="col-sm-8">
					<textarea name="alamat" class="form-control" placeholder="Alamat saat ini"><?=isset($default['alamat'])? $default['alamat'] : ""?></textarea>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">
					Lulusan
				</label>
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder="Tahun lulus" name="lulusan" value="<?=isset($default['lulusan'])? $default['lulusan'] : ""?>">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">
					Pekerjaan
				</label>
				<div class="col-md-4">
					<input type="text" class="form-control"placeholder="Pekerjaan Saat ini" name="pekerjaan" value="<?=isset($default['pekerjaan'])? $default['pekerjaan'] : ""?>">
				</div>
			</div>

			<div class="form-group">
	  <label class="control-label col-sm-2" for="prependedtext">Kontak HP</label>
	  <div class="col-md-4">
	    <div class="input-group">
	    	<div class="input-group-prepend">
	    		<span class="input-group-text">+62</span>
	    	</div>
	      <input id="prependedtext" name="kontak_hp" class="form-control" placeholder="Nomor Aktif" type="text" value="<?=isset($default['kontak_hp'])? $default['kontak_hp'] : ""?>">
	    </div>
	    
	  </div>
	</div>

			<div class="form-group">
				<label class="control-label col-sm-2">
					Email					
				</label>
				<div class="col-md-4">
					<input type="text" class="form-control" placeholder="Email Aktif" name="email" value="<?=isset($default['email'])? $default['email'] : ""?>">
				</div>
			</div>

			<div class="form-group">
	  <label class="col-md-4 control-label" for="foto">Upload Foto</label>
	  <div class="col-md-4">
	    <input id="foto" name="foto" class="input-file" type="file" <?=isset($default['foto'])? $default['foto'] : ""?>>
	  </div>
	</div>

				<button name="tombol_submit" class="btn btn-success">
					Simpan
				</button>

				<a name="tombol_back" class="btn btn-danger" href="index.php/page">Batal
				</a>
		</form>
	</div>


  </div>
          </div>
        </div>

      </div>
    </div>


  </div>
  <script defer src="<?php echo base_url('assets/js/all.js');?>"></script>
</body>
</html>