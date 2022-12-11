
<?php 	
include('koneksi.php');
$db = new Dbh();
$nisn = $_GET['nisn'];
if(! is_null($nisn))
{
	$siswa = $db->get_by_id($nisn);
}
else
{
	header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="nisn" value="<?php echo $siswa['nisn']; ?>"/>
<table>
		<td>NISN</td>
		<td>:</td>
		<td><input type="text" name="nisn" value="<?php echo $siswa['nisn']; ?>"/></td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $siswa['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>KELAS</td>
		<td>:</td>
		<td><input type="text" name="kelas" value="<?php echo $siswa['kelas']; ?>"/></td>
	</tr>
	<tr>
		<td>TANGGAL LAHIR</td>
		<td>:</td>
		<td><input type="text" name="tanggallahir" value="<?php echo $siswa['tanggallahir']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>