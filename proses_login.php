<?php


require 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
session_start();
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 if($data['level']=="admin"){

  $_SESSION['username'] = $username;
  $_SESSION['level'] = "admin";
  $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
  header("location:admin.php");

 }else if($data['level']=="siswa"){
    $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "siswa";
  header("location:siswa.php");

 }else{

  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}

?>