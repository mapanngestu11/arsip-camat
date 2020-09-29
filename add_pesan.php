<?php

session_start();

include 'koneksi.php';

$nama = $_POST['nama'];

$no_hp = $_POST['no_hp'];

$perihal = $_POST['perihal'];
$pesan = $_POST['pesan'];
$waktu = date('d-M-y');
$tanggal = date('h:i:s');

$sql = "INSERT INTO `kritik` (`id_pesan`,`nama`,`no_hp`, `perihal`,`pesan`,`tanggal`, `waktu`) VALUES (NULL,'$nama','$no_hp','$perihal','$pesan','$tanggal','$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='index.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Terima kasih telah memberikan tanggapan ');window.location.href='index.php';</script>";		
	}
	
	


?>