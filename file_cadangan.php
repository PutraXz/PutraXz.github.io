<?php
  session_start();
require "functions.php";
if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE  username = '$username' and password ='$password'");

    // cek username

    if( mysqli_num_rows($result) ===1 ) {

        // cek password

        $row = mysqli_fetch_assoc($result);
        if($row['level']=="admin"){
          
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:admin.php");
       }else if($row['level']=="siswa"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "siswa";
        // alihkan ke halaman dashboard pegawai
        header("location:admin.php");
       }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
  <form action="" method="post">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <label for="username"></label>
    <input type="text" name="username" id="username" placeholder="Username"> 
    </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <label for="password"></label>
    <input type="password" name="password" id="password" placeholder="Password"> 
  </div>

  <button type="submit" name="login" class="btn">Login</button>
</div>
</form>
  </body>
</html> 