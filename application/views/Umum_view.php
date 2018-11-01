<!DOCTYPE html>
<html>
<head>
	<title>Database Alumni MAN Purwakarta</title>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
	<div class="container-fluid" style="width: 100%;">
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<!--         <a class="navbar-brand" href="assets/gambar/logo1.png"> -->
	 <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/gambar/logo1.png"  id="icon" alt="User Icon" width="30px" height="30px" > IKLIMA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
       <!--            <form class="form-inline" action="/action_page.php">
    					<input class="form-control mr-sm-2" type="text" placeholder="Search">
    					<button class="btn btn-success" type="submit">Search</button>
  					</form>  -->
                </li>
                <li class="nav-item">
   
                    <a class="nav-link" href="index.php/login"><button class="btn btn-warning">Login</button></a>
                </li>
 
            </ul>
        </div>
    </nav>


  
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Alumni</h5>
                
      <div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr style="text-align: center;">
        <th>No.</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Lulusan</th>
        <th>Pekerjaan</th>
        <th>Kontak HP</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <!-- ISI DATA AKAN MUNCUL DISINI -->
      <?php
      $no = 1; //untuk menampilkan no
      foreach($list_alumni as $row){
      
        echo "
        <tr>
          <td>$no</td>
          <td>$row[foto]</td>
          <td>$row[nama_lengkap]</td>
          <td>$row[jk]</td>
          <td>$row[alamat]</td>
          <td>$row[lulusan]</td>
          <td>$row[pekerjaan]</td>
          <td>$row[kontak_hp]</td>
          <td>$row[email]</td>

        </tr>
        ";
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>
       
            </div>
          </div>
        </div>

      </div>
   

</div>
</body>
</html>