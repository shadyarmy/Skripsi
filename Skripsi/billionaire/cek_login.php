<?php
	session_start();

		if(isset($_POST['login'])){
		include('koneksi.php');

		$username = $_POST['username'];
		$password = md5($_POST['password']);

	$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE username = '$username' AND password = '$password'");
	if(mysqli_num_rows($query) == 0){
		echo "Invalid Username or Password";
	}else{
		$row = mysqli_fetch_assoc($query);

		if($row['jabatan'] == 'HRD'){
			$_SESSION['username'] = $username;
			$_SESSION['jabatan']  = 'HRD';
			header("Location:home.php");
		}else if($row['jabatan'] == 'Admin'){
			$_SESSION['username'] = $username;
			$_SESSION['jabatan'] = 'Admin';
			header("Location:home.php");	
		}else{
			echo "Gagal Login";
		}
	}
		}
?>