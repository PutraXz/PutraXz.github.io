<?php
	require "../functions.php";
	
	$nrp = $_GET['nrp'];

	$sql_cek = "SELECT * FROM mahasiswa";
	$query_cek = mysqli_query($conn, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK DATA Siswa</title>
</head>

<body>
	<center>

			<?php
			}

			$sql_tampil = "SELECT * from mahasiswa where nrp='$nrp'";
			$query_tampil = mysqli_query($conn, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA Siswa</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" style="width: 70%; height:50%;"  align="center" >
		<tbody>
			<tr>
				<td>NRP</td>
				
				<td>
					<?php echo $data['nrp']; ?>
				</td>
				<td rowspan="6" align="center">
				<img src="../img/<?= $data['gambar']; ?>" width="400px">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				
				<td>
					<?php echo $data['email']; ?>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				
				<td>
					<?php echo $data['jurusan']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>

</html>