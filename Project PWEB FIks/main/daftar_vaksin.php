<?php
require_once "funtionmin.php";

if(isset($_POST["register"])){
    if(register($_POST)>0){
        echo "<script> alert('User berhasil ditambhakan')</script>";
        header("Location: riwayat.php");
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
    <title>Document</title>
    <link rel="stylesheet" href="vaksin1.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#kota').change(function(){
            var kota_id  = $(this).val();  
        $.ajax({
            type: 'POST',
            url: 'rs.php',
            data: 'city_id='+kota_id,
            success: function(response){
                $('#rs_id').html(response);
            }
            });  
          })
      });
</script>
    
    <title>Vaksin</title>
    
</head>
<body>
    <div class="title">Daftar Vaksinasi</div>
    <div class="wrapper">
      <!-- <div class="title">Daftar Vaksinasi</div> -->
      <form action="" method="post">
        <!-- nama -->
        <div class="field">
            <!-- text agar inputan terlihat. required utk memberikan pesan jika inputan kosong/ada salah -->
            <input type="text" name="nama" id="nama" required>
            <label>Nama Lengkap</label>
        </div>
        <!-- nik -->
        <div class="field">
        <input type="text" name="nik" id="nik" required>
            <label>NIK</label>
        </div>
        <!-- tanggal lahir -->
        <div class="field">
        <input type="date" id="birthday" name="birthday"required >
            <label>Tanggal lahir (mm-dd-yyyy)</label>
        </div>
        <!-- gender -->
        <div class="field">
            <label class="sex"></label>
                <select name="gender">
                    <option>Jenis Kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
        </div>
        <!-- alamat -->
        <div class="field">
            <input type="text" required>
            <label>Alamat</label>
        </div>
        <!-- city -->
        <div class="field">
            <!-- <input type="teks" required>
            <label>Kota</label> -->
            <label for="city_id">Kota</label>
            <select name="city_id" id="kota" >
                <option>Pilih</option>
                <?php 
                $query=mysqli_query($connection,"SELECT * FROM city") or die(mysqli_error($connection));
                while($data_city=mysqli_fetch_array($query)){
                    echo "<option value =$data_city[city_id]>$data_city[nama_city]</option>";
                }
                ?>
        </div>
        <!-- rumah sakit -->
        <div class="field">
            <!-- <input type="teks" required>
            <label>Rumah Sakit</label> -->
            <select name="rs_id" id="rs_id">
                <option value="">Pilih</option>
            </select>
        </div>

        <!-- submit -->
        <div class="field btn">
            <input type="button" value="Submit" name="register">
        </div>

      </form>
    </div>
    
</body>
</html>