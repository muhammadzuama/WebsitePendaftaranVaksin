<?php
require_once "funtionmin.php";
$id=$_GET["id"];
if(hapus($id)>0){
    echo"<script>
    alert('vaksinasi berhasil diabtalkan ');
    document.location.href='../dashboard/dashboard.php';
    </script>";
}
?>