<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2>Tambah Data</h2>
	<p><strong>Tambah Data</strong></p>

	<form action="create" method="post">
		<?php echo $model->labels['nk']; ?><br/>
		<input type="text" name="nk" size="10" maxlength="4" />
		</br></br>

		<?php echo $model->labels['nama_lengkap']; ?><br/>
		<input type="text" name="nama_lengkap" size="30" maxlength="25"/>
		<br/><br/>

		<?php echo $model->labels['lulusan']; ?><br/>
		<input type="text" name="lulusan" size="20"/>
		<br/><br/>

		<input type="submit" name="btnSubmit" value="Simpan"/>
		<input type="button" value="Batal" onclick="javascript:history.go(-1);">
	</form>

</body>
</html>