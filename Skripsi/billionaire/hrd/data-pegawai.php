<?php
error_reporting(E_ERROR);
session_start();
if(empty($_SESSION)){
	header('Location:index.php');
}
?>
<html>
<head>
	<title>Billionaire Store</title>
</head>
<body>
	<table id="tabledata" class="table table-striped table-bordered">
        <thead>
            <tr>
            	<th>NO.</th>
                <th>ID Pegawai</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>Username</th>
       			<th>Aksi</th>
            </tr>
       	</thead>
       	<tbody>
			<?php 
				include "koneksi.php";
				$no = 1;
				$query = mysqli_query ($koneksi, "SELECT * FROM pegawai");
				while ($row = mysqli_fetch_assoc($query)) {
			?>
				<tr>
					<td><?php echo "$no" ?></td>
					<td><?php echo "$row[id_pegawai]";?></td>
					<td><?php echo "$row[nama]";?></td>
					<td><?php echo "$row[alamat]";?></td>
					<td><?php echo "$row[no_telp]";?></td>
					<td><?php echo "$row[email]";?></td>
					<td><?php echo "$row[jabatan]";?></td>
					<td><?php echo "$row[username]";?></td>
					<td>
						<a href="?page=ubah-pegawai&id_pegawai=<?php echo"$row[id_pegawai]"; ?>"><i class="ti-pencil-alt" 
							title="Ubah Pegawai"></i>
						<a href="hrd/hapus-pegawai.php?id= <?php echo"$row[id_pegawai];"; ?>"><i class="ti-trash"
							title="Hapus Pegawai">
					</td>
				</tr>
			<?php
				$no++; 
				}
			?>
		</tbody>
    </table>

    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>	

    <script type="text/javascript">
        $(document).ready(function() {
          $('#tabledata').DataTable();
        } );
    </script>
</body>
</html>