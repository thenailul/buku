<?php
    include "koneksi.php";
    if (isset($_POST['simpan'])) 
    {
        mysqli_query($con, "INSERT INTO tb_user VALUE('','$_POST[username]','$_POST[password]','$_POST[profile]','$_POST[alamat]')");
        echo "<script>document.location.href='login.php';</script>";
    }
?>
<form action="" method="post">
<div class="mb-3">
  <label for="username" class="form-label">username</label>
  <input type="text" class="form-control" id="username" name="username">
</div>
<div class="mb-3">
  <label for="password" class="form-label">password</label>
  <input type="password" class="form-control" id="password" name="password">
</div>
<div class="mb-3">
  <label for="profile" class="form-label">profile</label>
  <input type="text" class="form-control" id="profile" name="profile">
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">alamat</label>
  <input type="text" class="form-control" id="alamat" name="alamat">
</div>
<input type="submit" name="simpan" value="register">
</form>
