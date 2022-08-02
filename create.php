<?php
    include "koneksi.php";
    if (isset($_POST['simpan'])) 
    {
        mysqli_query($con, "INSERT INTO tb_buku VALUE('','$_POST[judul]','$_POST[isbn]','$_POST[penerbit]','$_POST[deskripsi]')");
        echo "<script>document.location.href='index.php';</script>";
    }
?>
<form action="" method="post">
    <div>
        <label for="judul">judul</label>
        <input type="text" name="judul" id="judul">
    </div>
    <div>
        <label for="isbn">isbn</label>
        <input type="text" name="isbn" id="isbn">
    </div>
    <div>
        <label for="penerbit">penerbit</label>
        <input type="text" name="penerbit" id="penerbit">
    </div>
   
    <div class="mb-3">
        <label for="deskripsi" class="form-label">deskripsi</label>
        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
    </div>
    <input type="submit" name="simpan" value="simpan">
</form>