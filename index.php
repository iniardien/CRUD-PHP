<?php
    include "koneksi.php";
?>
<html>
    <body>
        <h1><center>DAFTAR BARANG BORMA CINUNUK</center></h1>
        <table border="1" cellpadding="5px" align="center">
            <tr align="center" style="font-size:18px">
                <td>Kode barang</td>
                <td>Nama barang</td>
                <td>Total barang</td>
                <td>Harga satuan</td>
                <td colspan="2">tindakan</td>
            </tr>
            <?php
                $sql="select * from barang";
                $sql2=mysqli_query($konek, $sql) or die (mysql_error());
                while($hasil=mysqli_fetch_array($sql2)){
                    $id=$hasil['no'];
                    echo "<tr align='center' style='font-size:18px'>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$hasil['nama_barang']."</td>";
                    echo "<td>".$hasil['total_barang']."</td>";
                    echo "<td>".$hasil['harga_satuan']."</td>";
                    echo "<td><a href=\"proses_hapus.php?id=$id\""."onclick=\"return 
                        confirm('Hapus data?')\"".">Hapus</a></td>\n";
                    echo "<td><a href=\" edit.php? id=$id\">Update</a></td>\n";
                    echo "</tr>";
                }
            ?>
    </TABle>
    <center><a href="insert.php">Tambah data barang</a></center>
    </body>
</html>