<!DOCTYPE html>
<html>
<head>
	<title>Bioadata Keanggotaan</title>

<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>

<div class="container">
	 <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
                <p>
	<form method="post" class="form-horizontal" style="align-content: center;">
	<fieldset>

	<!-- Form Name -->
	<legend>Formulir Keanggotaan Alumni MAN Purwakarta</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="nama_lengkap">Nama Lengkap</label>  
	  <div class="col-md-4">
	  <input id="nama_lengkap" name="nama_lengkap" type="text" placeholder="" class="form-control input-md" value="<?= isset($default['nama_lengkap'])$default['nama_lengkap']: "" ?>">
	  <span class="help-block">Sesuai Ijazah</span>  
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="jk">Jenis Kelamin</label>
	  <div class="col-md-4">
	    <select id="jk" name="jk" class="form-control">
	      <option value="1">Laki - laki</option>
	      <option value="2">Perempuan</option>
	      <?=isset($default['jk'])? $default['jk'] : ""?>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="alamat">Alamat Lengkap </label>  
	  <div class="col-md-4">
	  <input id="alamat" name="alamat" type="text" placeholder="Alamat Sekarang" class="form-control input-md" value="<?=isset($default['alamat'])? $default['alamat'] : ""?>">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="lulusan">Lulusan</label>  
	  <div class="col-md-4">
	  <input id="lulusan" name="lulusan" type="text" placeholder="Tahun lulus" class="form-control input-md" value="<?=isset($default['lulusan'])? $default['lulusan'] : ""?>">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="pekerjaan">Pekerjaan</label>  
	  <div class="col-md-4">
	  <input id="pekerjaan" name="pekerjaan" type="text" placeholder="Pekerjaan" class="form-control input-md" value="<?=isset($default['pekerjaan'])? $default['pekerjaan'] : ""?>">
	  <span class="help-block">Isi dengan (-) bagi yang belum bekerja</span>  
	  </div>
	</div>

	<!-- Prepended text-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="prependedtext">Kontak HP</label>
	  <div class="col-md-4">
	    <div class="input-group">
	      <span class="input-group-addon">+62</span>
	      <input id="prependedtext" name="kontak_hp" class="form-control" placeholder="Nomor Aktif" type="text" value="<?=isset($default['kontak_hp'])? $default['kontak_hp'] : ""?>">
	    </div>
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="email">Email</label>  
	  <div class="col-md-4">
	  <input id="email" name="email" type="text" placeholder="Email Aktif" class="form-control input-md"<?=isset($default['email'])? $default['email'] : ""?>>
	    
	  </div>
	</div>

	<!-- File Button --> 
	<div class="form-group">
	  <label class="col-md-4 control-label" for="foto">Upload Foto</label>
	  <div class="col-md-4">
	    <input id="foto" name="foto" class="input-file" type="file" <?=isset($default['foto'])? $default['foto'] : ""?>>
	  </div>
	</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="tombol_submit" class="btn btn-success" type="submit">Simpan</button>
    <button id="Simpan" name="tombol_batal" class="btn btn-danger">Batal</button>
  </div>
</div>

	</fieldset>
	</form>
</p>
</div>
</div>
</div>
</div>
</body>
</html>