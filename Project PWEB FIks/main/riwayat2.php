<?php
session_start();
require_once "funtionmin.php";
// $result= mysqli_query($connection,"SELECT * FROM city JOIN hospital USING(city_id) JOIN daftars_ USING (rs_id) WHERE daftar_id = '".$_SESSION["id"]."' ");
$result= mysqli_query($connection,"SELECT * FROM city JOIN hospital USING(city_id) JOIN daftars_ USING (rs_id) WHERE daftar_id = '1' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="riwayat.css">
    <title>Riwayat</title>
    <style>
        
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
<?php foreach ($result as $row){ ?>
    <div class="title">Riwayat Pendaftaran</div>
    <div class="wrapper">
      <!-- <div class="title">Daftar Vaksinasi</div> -->
      <form action="" method="post">
        <!-- nama -->
        <div class="field">
            <!-- text agar inputan terlihat. required utk memberikan pesan jika inputan kosong/ada salah -->
            <span>Nama</span>
            <input  disabled><?php echo $row["nama"]; ?>
        </div>
        <!-- nik -->
        <div class="field">
            <span>NIK</span>
            <input disabled>
        </div>
        <!-- tanggal lahir -->
        <div class="field">
            <span>Tanggal Lahir</span>
            <input disabled>
        </div>
        <!-- gender -->
        <div class="field">
            <span>Jenis Kelamin</span>
            <input disabled>
        </div>
        <!-- alamat -->
        <div class="field">
            <span>Alamat</span>
            <input disabled>
        </div>
        <!-- city -->
        <div class="field">
            <span>Kota</span>
            <input disabled>
        </div>
        <!-- rumah sakit -->
        <div class="field">
            <span>Rumah Sakit</span>
            <input disabled>
        </div>

        <!-- submit -->

        <div class="field btn">
            <input type="button" value="Batalkan Pendaftaran" style="background-color:rgb(209, 31, 31) ;">
        </div>

      </form>
    </div>
    <?php };?>
</body>
</html>