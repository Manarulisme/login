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
	<form class="form-horizontal" style="align-content: center;">
	<fieldset>

	<!-- Form Name -->
	<legend>Formulir Keanggotaan Alumni MAN Purwakarta</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
	  <div class="col-md-4">
	  <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md">
	  <span class="help-block">Sesuai Ijazah</span>  
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic">Jenis Kelamin</label>
	  <div class="col-md-4">
	    <select id="selectbasic" name="selectbasic" class="form-control">
	      <option value="1">Laki - laki</option>
	      <option value="2">Perempuan</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Alamat">Alamat Lengkap </label>  
	  <div class="col-md-4">
	  <input id="Alamat" name="Alamat" type="text" placeholder="Alamat Sekarang" class="form-control input-md">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="lulusan">Lulusan</label>  
	  <div class="col-md-4">
	  <input id="lulusan" name="lulusan" type="text" placeholder="Tahun lulus" class="form-control input-md">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="pekerjaan">Pekerjaan</label>  
	  <div class="col-md-4">
	  <input id="pekerjaan" name="pekerjaan" type="text" placeholder="Pekerjaan" class="form-control input-md">
	  <span class="help-block">Isi dengan (-) bagi yang belum bekerja</span>  
	  </div>
	</div>

	<!-- Prepended text-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="prependedtext">Kontak HP</label>
	  <div class="col-md-4">
	    <div class="input-group">
	      <span class="input-group-addon">+62</span>
	      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Nomor Aktif" type="text">
	    </div>
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="email">Email</label>  
	  <div class="col-md-4">
	  <input id="email" name="email" type="text" placeholder="Email Aktif" class="form-control input-md">
	    
	  </div>
	</div>

	<!-- File Button --> 
	<div class="form-group">
	  <label class="col-md-4 control-label" for="foto">Upload Foto</label>
	  <div class="col-md-4">
	    <input id="foto" name="foto" class="input-file" type="file">
	  </div>
	</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success" type="submit">Simpan</button>
    <button id="Simpan" name="Simpan" class="btn btn-danger">Batal</button>
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