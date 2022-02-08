
<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM mahasiswa WHERE nrp='".$_GET['kode']."'";
        $query_cek = mysqli_query($conn, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
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
				<label class="col-sm-2 col-form-label">nrp</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo $data_cek['nrp']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Siswa</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $data_cek['email']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $data_cek['jurusan']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">gambar Pegawai</label>
				<div class="col-sm-6">
				<img src="img/<?= $data_cek["gambar"]; ?>" width="250">
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
			<a href="?page=data-pegawai" title="Kembali" class="btn btn-secondary">Batal</a>
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
        $gambar= $data_cek['gambar'];
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
                window.location = 'buttons.php?page=data-pegawai';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'buttons.php?page=data-pegawai';
            }
        })</script>";
    }
}

