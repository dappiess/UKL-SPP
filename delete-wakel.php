<?php  
	include 'koneksi.php';

	$id = $_GET['id'];
	$delete = mysqli_query($konek,"DELETE FROM kelas WHERE kelas = '$id'");
	if ($delete) {
		header('location:data-walikelas.php');
	}

?>