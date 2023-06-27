<?php
require_once "getfuntion.php";
if(isset($_POST["register"]))
{
    if(register($_POST)>0){
        echo "<script> alert('User berhasil ditambhakan')</script>";
        header("Location: ../login.php");
        exit;
    }else {
        echo mysqli_error($connection);
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
    <title>Form Login Sederhana</title>
</head>
<body>
    <div class="wrapper">
      <div class="title">Registration</div>
      <form action="" method="POST">
        <div class="field">
            <!-- text agar inputan terlihat. required utk memberikan pesan jika inputan kosong/ada salah -->
            <input type="text" name="nama" id="nama" required>
            <label>Nama Lengkap</label>
        </div>
        <div class="field">
            <input type="text" name="username" id="username" required>
            <label>Username</label>
        </div>
        <div class="field">
            <input type="date" id="birthday" name="birthday" required>
            <label>Tanggal lahir </label>
        </div>
        <div class="field">
            <label class="sex"></label>
                <select name="gender">
                    <option>Gender</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
        </div>
        <div class="field">
            <input type="text" name="no_hp" id="no_hp"required>
            <label>No. Handphone</label>
        </div>
        <div class="field">
            <input type="text" name="email" id="email" required>
            <label>Email</label>
        </div>
        <div class="field">
            <input type="password" name="password" id="password"required>
            <label>Password</label>
        </div>
        <div class="field">
            <input type="password" name="password2" id="password2"required>
            <label>Konfirmasi Password</label>
        </div>
        <div class="field btn">
            <input type="submit" name="register" value="Daftar">
        </div>
      </form>
    </div>
</body>
</html>