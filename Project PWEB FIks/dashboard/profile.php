<?php
session_start();
require_once "../register/getfuntion.php";
$result= mysqli_query($connection,"SELECT * FROM users WHERE user_id = '".$_SESSION["id"]."' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Document</title>
    <!-- <style>
        table,th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 1%;
        }
        table{
        font-family: arial, sans-serif;
        width: 65%;
        }
    </style> -->
</head>
<body>
<?php foreach ($result as $row){ ?>
    <div class="box">
        <div class="atas">Profile</div>
        <!--<div class="kiri">
            <div class="gambar"></div>
        </div> -->
        <div class="tengah">
            <div class="atasnya">
                <span>Nama          :</span> </br>
                <!-- <input type="text"> -->
                <td><?php echo $row["nama_lengkap"]; ?></td>
            </div>
            <div class="atasnya">
                <span>Jenis Kelamin :</span> </br>
                <!-- <input type="text" disabled> -->
                <td><?php echo $row["gender"]; ?></td>
            </div>
            <div class="atasnya">
                <span>Email         :</span> </br>
                <!-- <input type="text" disabled> -->
                <td><?php echo $row["email"]; ?></td>
            </div>
        </div>
        <div class="kanan">
            <div class="atasnya">
                <span>Tanggal lahir :</span> </br>
                <!-- <input type="date" disabled> -->
                <td><?php echo $row["tanggal_lahir"]; ?></td>
            </div>
            <div class="atasnya">
                <span>No. Handphone :</span> </br>
                <!-- <input type="text"> -->
                <td><?php echo $row["no_hp"]; ?></td>
            </div>
        </div>
    </div>

    <a href="profile_update.php?id=<?= $row["user_id"]; ?>"><button type="submit name="login>Edit Profil</button></a>
    <a href="logout.php"><button type="submit" name="login">Logout</button></a>
    <?php };?>
</body>
</html>