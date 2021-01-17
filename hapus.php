<?php 
include("koneksi.php");

	$kode_material=$_GET['kode_material'];
	$row = mysqli_query($koneksi, "DELETE FROM tabel_material WHERE kode_material = '$kode_material'");

	header('location:material.php');

