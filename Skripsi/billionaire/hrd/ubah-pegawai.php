<?php
error_reporting(E_ERROR);
session_start();
if(empty($_SESSION)){
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Billionaire Store</title>
</head>
<body>
	<center><h1>Ubah Data</h1></center>
	<form method="post" name="ubahpegawai" action="../billionaire/hrd/proses-ubah-pegawai.php">
		<table class="table">
			<?php
				include "./koneksi.php";
				$query = mysqli_query($koneksi, "SELECT * FROM pegawai where id_pegawai='$_GET[id_pegawai]'");
    			$row = mysqli_fetch_array($query);
			?>
			<tr>
				<td>ID Pegawai</td>
				<td>
					<input type="text" class="form-control" name="id_pegawai" value="<?php echo $row['id_pegawai']; ?>" id="id_pegawai" placeholder="ID Pegawai" readonly>
				</td>
			</tr>
			<tr>
				<td>Nama Pegawai</td>
				<td>
					<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>" id="nama"
					placeholder="Nama Pegawai">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>" id="alamat"
					placeholder="Alamat">
				</td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td>
					<input type="text" name="no_telp" class="form-control" value="<?php echo $row['no_telp'];?>" id="no_telp" placeholder="No Telepon" >
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>" id="email" placeholder="Email" >
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>
					<select name="jabatan" class="textbox">
						<option value="<?php echo $row['level'] ?>"><?php echo $row['level']; ?></option>
						<option value="HRD">HRD</option>
                        <option value="Admin">Admin</option>
                        <option value="CEO">CEO</option>
                        <option value="Finance">Finance</option>
                        <option value="Manager_Marketing">Manager Marketing</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>" id="username" placeholder="username" >
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="text" name="password" class="form-control" value="<?php echo $row['password'];?>" id="password" placeholder="password" >
				</td>
			</tr>
		</table>
		<center>
			<button type="reset" class="btn btn-primary">Reset</button>
            <button type="submit" name="ubahpegawai" class="btn btn-primary" value="submit">Save</button>
		</center>
	</form>

</body>
</html>
