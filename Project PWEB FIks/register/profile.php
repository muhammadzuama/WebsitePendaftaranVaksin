<?php
session_start();
require_once "getfuntion.php";
$result= mysqli_query($connection,"SELECT * FROM users WHERE user_id = '".$_SESSION["id"]."' ");
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
    </style>
</head>
<body>
<?php foreach ($result as $row){ ?>
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo $row["nama_lengkap"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $row["gender"]; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $row["tanggal_lahir"]; ?></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><?php echo $row["no_hp"]; ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?php echo $row["email"]; ?></td>
        </tr>
    </table>
    <a href="profile_update.php?id=<?= $row["user_id"]; ?>"><button type="submit name="login>Edit Profil</button></a>
    <a href="logout.php"><button type="submit" name="login">Logout</button></a>
    <?php };?>
</body>
</html>