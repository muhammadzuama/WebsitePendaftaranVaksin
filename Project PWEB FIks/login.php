<?php
session_start();
require_once "register/getfuntion.php";
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id=$_COOKIE['id'];
    $key=$_COOKIE['key'];

}

if(isset($_POST["login"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $result= mysqli_query($connection,"SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($result)===1){
        $row= mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["user_id"];

            if(isset($_POST["remember"])){
                setcookie('id',$row['user_id'],time() + 60);
                setcookie('key',hash('sha256',$row['username']));
            }
            header("Location: dashboard/dashboard.php");
            exit;
        }
    }
    $error= true;
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Login Sederhana</title>
</head>
<body>
<?php if(isset($error)){?>
    <script>alert("username atau password salah");</script>
<?php } ?>
    <div class="wrapper">
      <div class="title">Login</div>
      <form action="" method="POST" >
        <div class="field">
            <!-- text agar inputan terlihat. required utk memberikan pesan jika inputan kosong/ada salah -->
            <input type="text" name="username" id="username" required>
            <label for="username">username</label>
        </div>
        <div class="field">
            <input type="password" name="password" id="password" required>
            <label for="password">password</label>
        </div>
        <div class="content">
            <div class="checkbox">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            <div class="password-link">
                <a href="register/forgotpasword.php">Forgot Password?</a>
            </div>
        </div>
        <div class="field btn">
            <input type="submit" value="Login" name="login">
        </div>
        <div class="regis-link">
            Don`t have an account?
            <a href="register/regis.php">Create one</a>
        </div>
      </form>
    </div>
</body>
</html>