<?php 	
include('koneksi.php');
$db = new Dbh();
$siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.nama{
			margin-left: 600px;
		}
	</style>
	<title>OOP</title>
</head>
<body>
	<div class="nama">

	<h2>Taufik Fadillah</th>
	<h3>XI RPL</th>
</div>
<a href="tambah_data.php">Tambah Data</a>
<table border="1" align=center>
		<tr>
			<th>NO</th>
			<th>NISN</th>
			<th>NAMA</th>
			<th>KELAS</th>
			<th>TANGGALLAHIR</th>
			<th colspan=2>AKSI</th>
		</tr>
		<?php 
		$no = 1;
		foreach($siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nisn']; ?></td>
				<td><?php echo $row['kelas']; ?></td>
				<td><?php echo $row['tanggallahir']; ?></td>
				<td>
					<a href="edit.php?nisn=<?php echo $row['nisn']; ?>">UBAH</a>
					<a href="proses.php?action=delete&nisn=<?php echo $row['nisn']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>