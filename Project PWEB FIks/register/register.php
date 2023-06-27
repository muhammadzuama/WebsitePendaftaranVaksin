<?php
require_once "getfuntion.php";
if(isset($_POST["register"]))
{
    if(register($_POST)>0){
        echo "<script> alert('User berhasil ditambhakan')</script>";
        header("Location: login.php");
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
    <title>Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
<h1>Halaman Registrasi</h1>
<form action="" method="POST">
    <ul>
        <li>
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="birthday">Tanggal Lahir</label>
            <input type="date" id="birthday" name="birthday">
        </li>
        <li>
            <label for="gender">Jenis Kelamin</label>
            <input type="radio" name="gender" id="gender" value="Laki-laki">Laki-laki
            <input type="radio" name="gender" id="gender" value="Perempuan">Perempuan
        </li>
        <li>
            <label for="no_hp">No Hp</label>
            <input type="text" name="no_hp" id="no_hp">
        </li>
        <li>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="passsword2">Konfirmasi Password</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul>
</form>
</body>
</html>