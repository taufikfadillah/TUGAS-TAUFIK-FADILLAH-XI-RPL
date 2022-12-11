<?php 
class Dbh{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "dbnilai_taufik";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($nisn,$nama,$kelas,$tanggallahir)
	{
		$query = mysqli_query($this->koneksi,"insert into siswa values ('$nisn','$nama','$kelas','$tanggallahir')");
	}
	
	function get_by_id($nisn)
	{
		$query = mysqli_query($this->koneksi,"select * from siswa where nisn='$nisn'");
		return $query->fetch_array();
	}
	function update_data($nisn,$nama,$kelas,$tanggallahir)
	{
		$query = mysqli_query($this->koneksi,"update siswa set nisn='$nisn',nama='$nama',kelas='$kelas',tanggallahir=$tanggallahir where nisn='$nisn'");

	}
	function delete_data($nisn)
	{
		$query = mysqli_query($this->koneksi,"delete from siswa where nisn='$nisn'");
	}
}

?>