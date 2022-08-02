<?php
    include "koneksi.php";
    if (isset($_POST['update'])) 
    {
        mysqli_query($con, "update tb_buku set judul='$_POST[judul]',isbn='$_POST[isbn]',penerbit='$_POST[penerbit]',deskripsi='$_POST[deskripsi]' where id='$_GET[id]'");
        echo "<script>alert('Data Terubah')';</script>";
        echo "<script>document.location.href='index.php';</script>";
    }
    $no = $_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM tb_buku where id=$no");
    $edit = mysqli_fetch_array($result);
?>
<form action="" method="post">
    <div>
        <label for="judul">judul</label>
        <input type="text" name="judul" id="judul" value="<?php echo @$edit ['judul']; ?>">
    </div>
    <div>
        <label for="isbn">isbn</label>
        <input type="text" name="isbn" id="isbn" value="<?php echo @$edit ['isbn']; ?>">
    </div>
    <div>
        <label for="penerbit">penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="<?php echo @$edit ['penerbit']; ?>">
    </div>
   
    <div class="mb-3">
        <label for="deskripsi" class="form-label">deskripsi</label>
        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" value="<?php echo @$edit ['deskripsi']; ?>"></textarea>
    </div>
    <input type="submit" name="update" value="simpan">
</form>