<?php 
require_once "funtionmin.php";
$kota_id  = $_POST['city_id'];
$sql_rs = mysqli_query($connection, "select * from hospital where city_id = '$kota_id'");
echo '<option>Pilih Rumah sakit</option>';
while($row_rs = mysqli_fetch_array($sql_rs)){
    echo '<option value="'.$row_rs['rs_id'].'">'.$row_rs['nama_rs'].'</option>';
}
 ?>