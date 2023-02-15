<?php
	include "koneksi.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$hasil=mysqli_query($konek,"select *from barang where no='$id'")or die(mysql_error());
		$baris=mysqli_fetch_array($hasil);

		$no=$baris['no'];
		$nama=$baris['nama_barang'];
		$total=$baris['total_barang'];
		$harga=$baris['harga_satuan'];
	}else{
		header('location:index.php');
	}
?>
<html>
	<body>
		<h1>Ubah Data</h1>
		<form action='proses_edit.php' method="POST">
			<table>
				<tr>
					<td>No</td>
					<td><input type='text' name='nomor' size='25' value='<?php echo "$no"?>'/></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type='text' name='nama_barang' size='25' value='<?php echo "$nama"?>'/></td>
				</tr>
				<tr>
					<td>Total Barang</td>
					<td><input type='text' name='total_barang' size='25' value='<?php echo "$total"?>'/></td>
				</tr>
				<tr>
					<td>Harga Barang</td>
					<td><input type='text' name='harga_satuan' size='25' value='<?php echo "$harga"?>'/></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type='submit' name='submit' value='simpan'/></td>
				</tr>
			</table>
		</form>

</body>
<a href="index.php">Home</a>
</html>