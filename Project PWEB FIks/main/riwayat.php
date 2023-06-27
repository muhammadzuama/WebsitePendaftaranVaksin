<?php
session_start();
require_once "funtionmin.php";
$result= mysqli_query($connection,"SELECT * FROM city JOIN hospital USING(city_id) JOIN daftars_ USING (rs_id) WHERE daftar_id = '".$_SESSION["id"]."' ");
$_SESSION
// $result= mysqli_query($connection,"SELECT * FROM city JOIN hospital USING(city_id) JOIN daftars_ USING (rs_id) WHERE daftar_id = '".$_SESSION["id"]." ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 1%;
        }
        table{
        font-family: arial, sans-serif;
        width: 65%;
        }
        html, body{
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
        background-image: url('https://i.pinimg.com/564x/57/6b/cc/576bcc357363251c23a2b7357c868ec4.jpg');
        background-size: cover;
        scroll-behavior: smooth;
    }
    </style>
</head>
<body>
    <center><h2>Riwayat Pendaftaran</h2></center>
<?php foreach ($result as $row){ ?>
    <table align="center">
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo $row["nama"]; ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td><?php echo $row["nik"]; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $row["tanggal_lahir"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $row["gender"]; ?></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><?php echo $row["alamat"]; ?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><?php echo $row["nama_city"]; ?></td>
        </tr>
        <tr>
            <td>Rumah Sakit</td>
            <td><?php echo $row["nama_rs"]; ?></td>
        </tr>
    </table>
    <a href="delete.php?id=<?= $row['daftar_id'];?><button type="submit" name="login">Batalkan Pendaftaran</button></a>
    <a href="../dashboard/dashboard.php"><button type="submit" name="login">Kembali ke Main Menu</button></a>
    <?php };?>
</body>
</html>