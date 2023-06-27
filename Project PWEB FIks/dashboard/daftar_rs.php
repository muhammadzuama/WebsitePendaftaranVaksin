<?php
require_once "config.php";
$connection=getconnection();
$sql= "SELECT * FROM vaksin JOIN hospital USING(vaksin_id) JOIN city USING (city_id)";
$result=$connection->query($sql);
if(isset($_POST["search"]))
{
    $cari=$_POST['cari'];
}else {
    $cari='';
}

$take_data=mysqli_query($connection,
"SELECT * FROM vaksin JOIN hospital USING(vaksin_id) JOIN city USING (city_id) WHERE nama_rs LIKE '%$cari%' OR alamat LIKE '%$cari%' OR nama_vaksin LIKE '%$cari%' OR nama_city LIKE '%$cari%'" );
$data_total=100;
$total=mysqli_num_rows($take_data);


//pagination
$jumlahPagianation=ceil($total/$data_total);
if(isset($_GET["page"])){
    $activePage=$_GET['page'];
}else{
    $activePage=1;
}
$dataawal=($activePage*$data_total)-$data_total;

$taken_data_every1=mysqli_query($connection,"SELECT * FROM vaksin JOIN hospital USING(vaksin_id) JOIN city USING (city_id) 
WHERE nama_rs LIKE '%$cari%' OR alamat LIKE '%$cari%' OR nama_vaksin LIKE '%$cari%' OR nama_city LIKE '%$cari%' LIMIT 0,$data_total");
$connection=null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="rs.css"> -->
    <style>
        html, body{
            background-image: url('https://i.pinimg.com/564x/57/6b/cc/576bcc357363251c23a2b7357c868ec4.jpg');
            background-size: cover;
        }
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
    <center>
    <form action="" method="POST" id="keyword">
        <input type="text" name="cari" id="search">
        <button type="submit" name="search" id="tombol-cari">search</button>
    </form>
    </center>
    </br>

    <div id="container">
        <table align="center">
            <tr>
                <th>Nama Rumah Sakit</th>
                <th>Alamat</th>
                <th>Jenis vaksin</th>
                <th>Kota</th>
            </tr>
            <?php foreach ($taken_data_every1 as $row){ ?>
            <tr>
                <td><?php echo $row["nama_rs"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><?php echo $row["nama_vaksin"] ?></td>
                <td><?php echo $row["nama_city"] ?></td>
            </tr>
            <?php };?>
        </table>
    </div>

<!-- <script src="js/script.js"></script> -->

</body>
</html>