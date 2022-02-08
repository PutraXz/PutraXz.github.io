

<div class="row">
		<!-- Circle Buttons -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><center>Data siswa</h6>
			<div class="card-body">	
			<table id="example1" border="1" cellpadding="10" cellspasing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NRP</th>
						<th>Email</th>
						<th>Jurusan</th>
						<th>gambar</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<a href="buttons.php?page=add-pegawai" >Tambah data mahasiswa</a>
					<?php
              $no = 1;
			  $sql = $conn->query("SELECT * from mahasiswa");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['nrp']; ?>
						</td>
						<td>
							<?php echo $data['email']; ?>
						</td>
						<td>
							<?php echo $data['jurusan']; ?>
						</td>
						<td><img src="img/<?= $data["gambar"]; ?>" width="50"></td> 
						<td>
							<a href="?page=view-pegawai&kode=<?php echo $data['nrp']; ?>" title="Detail"
							 class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-pegawai&kode=<?php echo $data['nrp']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-pegawai&kode=<?php echo $data['nrp']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
				<!-- Circle Buttons (Small) -->
				<div class="mt-4 mb-2">
				<a href="admin/pegawai/data_pegawai.php"></a>
			</div>
		</div>
		</div>
			</div>
	<!-- /.card-body -->
	

	