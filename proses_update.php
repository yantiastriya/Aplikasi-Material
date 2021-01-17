<?php
require_once 'koneksi.php';
if (isset($_GET['submit'])) {
	$id = $_GET['id_produk'];
	$n_produk = $_POST ['nama_produk'];
	$harga = $_POST ['harga'];
	$qty = $_POST ['qty'];

	$q = $con->query ("update produk set nama_produk ='$n_produk', harga = '$harga', qty = '$qty' WHERE ID_PRODUK ='$id' ");
	if ($q) {
		echo "<script>alert ('data produk berhasil diubah'); window.location.href='index.php'</script>";
	} else{
		echo "<script>alert('data produk gagal diubah'); window.location.href='index.php'</script>";
	}
}else {
	header('location: index.php');
}