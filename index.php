<a class="btn btn-primary" href="create.php" role="button">tambah buku</a>
<a href="logout.php">logout</a>
<table border="1px">
    <tr>
        <td>No</td>
        <td>Judul</td>
        <td>ISBN</td>
        <td>Penerbit</td>
        <td>Deskripsi</td>
        <td>aksi</td>
    </tr>
    <?php
        include "koneksi.php";
        if (isset($_GET['hapus'])) {
            mysqli_query($con, "delete from tb_buku where id='$_GET[id]'");
            echo "<script>alert('Data terhapus');</script>";
        }
        $sql = mysqli_query($con, "SELECT * FROM tb_buku");
        while ($data = mysqli_fetch_array($sql)) {    
    ?>
    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['judul']?></td>
        <td><?php echo $data['isbn']?></td>
        <td><?php echo $data['penerbit']?></td>
        <td><?php echo $data['deskripsi']?></td>
        <td>
            <a href="edit.php?id=<?php echo $data['id'];?>">edit</a>
            <a href="?BUKU&hapus&id=<?php echo $data['id'] ?>">delete</a>           
        </td>
    </tr>
    
    <?php
        }
    ?>
</table>