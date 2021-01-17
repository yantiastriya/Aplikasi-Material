<?php
require_once 'koneksi.php';
if (isset($_GET['kode_material'])) {
	$kode_material = $_GET['kode_material'];

$q = $koneksi->query("select * from tabel_material");
foreach ($q as $dt ) :
?>
<h1>CRUD dengan PHP MySQL</h1>
<h2>Halaman Ubah Data</h2>

<form action="proses_update.php" methode="post">
	<input type="hidden" name="id_produk" value="<?= $dt ['id_produk'] ?>">
	<input type="text" name="nama_produk" value="<?= $dt ['nama_produk'] ?>">
	<input type="number" name="harga" value="<?= $dt ['harga'] ?>">
	<input type="number" name="qty" value="<?= $dt ['qty'] ?>">
	<input type="submit" name="submit" value="<?= $dt ['Ubah Data'] ?>">
</form>

<?php
endforeach;


}