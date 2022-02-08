
<?php

if(isset($_GET['kode'])){
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$sql33 = "SELECT * FROM mahasiswa WHERE nama='$username'";
		$query2 = mysqli_query($conn, $sql33);
		$row  = mysqli_fetch_array($query2);
		if(mysqli_num_rows($query2) > 0);
}
?>

<div class="card card-success">
<div class="card-header">
	<h3 class="card-title">
		<i class="fa fa-edit"></i> Ubah Data</h3>
</div>
<form action="" method="post" enctype="multipart/form-data">
	<div class="card-body">
	<div class="form-group row">
			<label class="col-sm-2 col-form-label">Username</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username']; ?>"
				 readonly/>
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-2 col-form-label">nrp</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo $row['nrp']; ?>"
				 readonly/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Siswa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>"
				/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>"
				/>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Jurusan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>"
				/>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">gambar Pegawai</label>
			<div class="col-sm-6">
			<img src="img/<?= $row["gambar"]; ?>" width="250">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Ubah gambar</label>
			<div class="col-sm-6">
				<input type="file" id="gambar" name="gambar">
				<p class="help-block">
					<font color="red">"Format file Jpg/Png"</font>
				</p>
			</div>
		</div>
	</div>

	<div class="card-footer">
		<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
		<a href="?page=data-diri" title="Kembali" class="btn btn-secondary">Batal</a>
	</div>
</form>
</div>

<?php
$sumber = @$_FILES['gambar']['tmp_name'];
$target = 'gambar/';
$nama_file = @$_FILES['gambar']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);


if (isset ($_POST['Ubah'])){

if(!empty($sumber)){
	$gambar= $row['gambar'];
		if (file_exists("gambar/$gambar")){
		unlink("gambar/$gambar");}

	$sql_ubah = "UPDATE mahasiswa SET
		nama='".$_POST['nama']."',
		email='".$_POST['email']."',
		jurusan='".$_POST['jurusan']."',
		gambar='".$nama_file."'		
		WHERE nrp='".$_POST['nrp']."'";

	$query_ubah = mysqli_query($conn, $sql_ubah);
	

}elseif(empty($sumber)){
	$sql_ubah = "UPDATE mahasiswa SET
	nama='".$_POST['nama']."',
	email='".$_POST['email']."',
	jurusan='".$_POST['jurusan']."'
	WHERE nrp='".$_POST['nrp']."'";
	$query_ubah = mysqli_query($conn, $sql_ubah);

}
	

if ($query_ubah) {
	echo "<script>
	Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'diri.php?page=data-diri';
		}
	})</script>";
	}else{
	echo "<script>
	Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'diri.php?page=data-diri';
		}
	})</script>";
}
}

