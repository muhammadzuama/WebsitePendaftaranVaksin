<?php
$connection = mysqli_connect("localhost","root","","daftar_vaksin");

function register($data)
{
    global $connection;
    $nama_lengkap=stripslashes(($data["nama"]));
    $username= stripslashes($data["username"]);
    $birtdayrtday=date('Y-m-d');
    $gender=stripslashes( $data["gender"]);
    $no_hp=stripslashes( $data["no_hp"]);
    $email=stripslashes( $data["email"]);
    $password = mysqli_real_escape_string($connection,$data["password"]);
    $password2 = mysqli_real_escape_string($connection,$data["password2"]);

    if($password !== $password2){
        echo "<script>alert('konfirmasi passsword salah')</script>";
        return false;
    }
    $result= mysqli_query($connection,"SELECT username FROM  users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah terdaftar')</script>";
        return false;
    }

    $password=password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($connection,"INSERT INTO users
    VALUES('','$username','$nama_lengkap','$gender','$birtdayrtday','$no_hp','$password','$email') ");
    return mysqli_affected_rows($connection);
}


function query($query){
    global $connection;
    $result=mysqli_query($connection,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function ubah($data)
{
    global $connection;
    $id=$data["user_id"];
    $nama_lengkap=htmlspecialchars(($data["nama"]));
    $no_hp=htmlspecialchars( $data["no_hp"]);
    $email=htmlspecialchars( $data["email"]);

    $query="UPDATE users SET
    nama_lengkap='$nama_lengkap',
    no_hp='$no_hp',
    email= '$email';
    WHERE user_id='$id'";

    mysqli_query($connection,$query);

    return mysqli_affected_rows($connection);
}

function reset_password()
{
    global $connection;
    $email = $_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    if($password !== $password2){
        echo "<script>alert('konfirmasi passsword salah')</script>";
        return false;
    }
    $password=password_hash($password, PASSWORD_DEFAULT);
    $query="UPDATE users SET
    password='$password'
    WHERE username='$username' AND email =$email";
    mysqli_query($connection,$query);
    return mysqli_affected_rows($connection);
}

?>