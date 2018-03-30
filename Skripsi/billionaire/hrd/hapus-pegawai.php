<?php
	session_start();
	include "/koneksi.php";
		$id_pegawai = $_GET['id_pegawai'];
		$sql 	=mysqli_query($koneksi,"DELETE FROM pegawai where id_pegawai='$id_pegawai'") 
			or die(mysqli_error($koneksi));
	echo "<script language='javascript'>alert('Data Berhasil dihapus');document.location='hrd/data-pegawai.php';
	</script>";	

?>