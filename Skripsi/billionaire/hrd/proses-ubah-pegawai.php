<?php
	if(isset($_POST['ubahpegawai'])){
		include "../koneksi.php";
    $id_pegawai = $_POST['id_pegawai'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$email = $_POST['email'];
		$jabatan = $_POST['jabatan'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$enkrip = md5($password);

		# bro biar enak debug nya
		# query nya di pisah ya
		# hahaha

		$query = "UPDATE pegawai
		          SET nama='$nama',
							    alamat ='$alamat',
									no_telp='$no_telp',
									jabatan = '$jabatan',
									username ='$username',
									password = '$enkrip'
							WHERE id_pegawai = '$id_pegawai'";
		$query_update = mysqli_query($koneksi,$query) or die (mysqli_error($koneksi));
		echo '<script language="javascript">alert("Sukses Mengubah Data pengguna");document.location="../home.php?page=data-pegawai"</script>';

	}
?>
