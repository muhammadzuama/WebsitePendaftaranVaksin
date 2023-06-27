<?php
session_start();
    require_once "config.php";
    $connection=getconnection();
    $id=$_GET['id'];
    $ambilData=mysqli_query($connection,"SELECT * FROM users WHERE user_id = '$id'");
    $data=mysqli_fetch_array($ambilData);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
<h1>Update Profile</h1>
<form action="" method="POST">
    <ul>
        <input type="hidden" name="id" value="<?php echo $user["user_id"] ?>">
        <li>
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" value="<?php echo $data["nama_lengkap"] ?>">
        </li>
        <li>
            <label for="no_hp">No Hp</label>
            <input type="text" name="no_hp" id="no_hp" value="<?php echo $data["no_hp"] ?>">
        </li>
        <li>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $data["email"] ?>">
        </li>
        <li>
            <button type="submit" name="simpan">Update Profile</button>
        </li>
    </ul>
</form>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $nama=$_POST['nama'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];

    mysqli_query($connection,"UPDATE users SET nama_lengkap='$nama',no_hp='$no_hp',email='$email'
    WHERE user_id='$id'") or die(mysqli_error($connection));
    echo "<script> alert('User berhasil ditambhakan')</script>";
    header("Location: profile.php");
    exit;
}
?>