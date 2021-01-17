<?php
require_once 'koneksi.php';

if (isset ($_POST ['submit']))
 {
	$kode_material = $_POST ['kode_material'];
	$nama_material = $_POST ['nama_material'];
	$part_number = $_POST ['part_number'];
	$packing_list = $_POST ['packing_list'];
	$stock = $_POST ['stock'];

	$q = $koneksi->query("insert into tabel_material values ('$kode_material', '$nama_material', '$part_number', '$packing_list', '$stock')");
	if ($q) 
		{echo "<script>alert ('data produk berhasil ditambahkan'); window.location.href='index2.php'</script>";}
 	else 
 		{echo "<script>alert ('data produk tidak berhasil ditambahkan'); window.location.href='index2.php'</script>";}
 }
	 else { header('Location : index2.php');
}
?>