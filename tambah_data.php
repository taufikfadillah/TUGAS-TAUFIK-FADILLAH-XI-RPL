<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=add">
<table>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td><input type="text" name="nisn"/></td>
	</tr>
	
	<tr>
		<td>NAMA</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	
	<tr>
		<td>KELAS</td>
		<td>:</td>
		<td><input type="text" name="kelas"/></td>
	</tr>
	
	<tr>
		<td>TANGGGAL LAHIR</td>
		<td>:</td>
		<td><input type="text" name="tanggallahir"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>