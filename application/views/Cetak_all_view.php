<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
<div class="container">
<h1 align="center">DAFTAR ALUMNI MAN PURWAKARTA</h1>
            <div class="card-body">
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


<script>
		window.print();
	</script>
</body>
</html>