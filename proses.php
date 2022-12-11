<?php 
include('koneksi.php');
$koneksi = new Dbh();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nisn'],$_POST['nama'],$_POST['kelas'],$_POST['tanggallahir']);
	header('location:home.php');
}

elseif($action=="update")
{
	$koneksi->update_data($_POST['nisn'],$_POST['nama'],$_POST['kelas'],$_POST['tanggallahir']);
	header('location:home.php');
}
elseif($action=="delete")
{
	$nisn = $_GET['nisn'];
	$koneksi->delete_data($nisn);
	header('location:home.php');
}
?>

