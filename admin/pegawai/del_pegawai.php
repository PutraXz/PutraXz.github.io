<?php

if(isset($_GET['kode'])){
    $sql_cek = "select * from mahasiswa where nrp='".$_GET['kode']."'";
    $query_cek = mysqli_query($conn, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<?php
    $gambar= $data_cek['gambar'];
    if (file_exists("gambar/$gambar")){
        unlink("gambar/$gambar");
    }

    $sql_hapus = "DELETE FROM mahasiswa WHERE nrp='".$_GET['kode']."'";
    $query_hapus = mysqli_query($conn, $sql_hapus);
    if ($query_hapus) {
        echo "<script>
        Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'buttons.php?page=data-pegawai'
        ;}})</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'buttons.php?page=data-pegawai'
        ;}})</script>";
    }
