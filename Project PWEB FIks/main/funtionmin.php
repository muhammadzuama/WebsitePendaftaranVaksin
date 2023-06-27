<?php
$connection = mysqli_connect("localhost","root","","daftar_vaksin");
function register($data)
{
    global $connection;
    $nama=$data["nama"];
    $nik=$data["nik"];
    $birthday=$data["birthday"];
    $gender=$data["gender"];
    $alamat=$data["alamat"];
    $city=$data["city_id"];
    $rs=$data["rs_id"];


    $result= mysqli_query($connection,"SELECT nik FROM  daftars_ WHERE nik = '$nik'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('nik sudah terdaftar')</script>";
        return false;
    }

    mysqli_query($connection,"INSERT INTO daftars_
    VALUES('','$nama','$nik','$birthday','$gender','$alamat','$city','$rs','')");
    return mysqli_affected_rows($connection);
}

function hapus($id){
    global $connection;
    mysqli_query($connection,"DELETE FROM daftars_ WHERE daftar_id='$id'");
    return mysqli_affected_rows($connection);
}
?>