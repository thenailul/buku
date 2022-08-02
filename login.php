<?php
@session_start();
include "koneksi.php";
if(isset($_POST['login'])){
$sql=mysqli_query($con,"select * from tb_user where username='$_POST[username]' and password='$_POST[password]'");
$data=mysqli_num_rows($sql);
if($data>=1){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    echo "<script>alert('selamat Datang');</script>";
    echo "<script>document.location.href='index.php';</script>";
}else{
    echo "<script>alert('Username atau password salah');</script>";
    echo "<script>document.location.href='login.php';</script>";
}}
?>
<form action="" method="post">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">username</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="username">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">password</label>
  <input type="password" class="form-control" id="formGroupExampleInput2" name="password">
</div>
<input type="submit" value="login" name="login">
</form>
<a href="registrasi.php">buat akun</a>
