<?php
session_start();
require_once "getfuntion.php";
if(isset($_POST["ubahpassword"])){
    if(reset_password($_POST)>0) {
        echo "<script> alert('User berhasil ditambhakan')</script>";
        header("Location: /login.php");
        exit;
    }else{
        echo "<script> alert('ada data yang salah')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>forgot_password</title>

</head>
<body>
    <div class="wrapper">
      <div class="title">Reset Password mu</div>
      <form action="../login.php" method="post">
        <div class="field">
            <!-- text agar inputan terlihat. required utk memberikan pesan jika inputan kosong/ada salah -->
            <input type="text" name="email" id="email" required>
            <label>email</label>
        </div>
        <div class="field">
            <input type="text" name="username" id="username" required>
            <label>Username</label>
        </div>
        <div class="field">
            <input type="password" name="password" id="password"required>
            <label> Buat Password Baru </label>
        </div>
        <div class="field">
        <input type="password" name="password2" id="password2"required>
            <label>Confirm Password</label>
        </div>
        <div class="field btn">
            <input type="submit" value="ubah_password" name="ubahpassword">
        </div>
      </form>
    </div>
</body>
</html>
