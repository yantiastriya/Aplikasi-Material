<?php 

require 'function.php';

//ambil data diURL
$kode_material = $_GET ["kode_material"];

//query data material berdasarkan kode_material
$material = query( "SELECT * FROM tabel_material where kode_material = '$kode_material'") [0];




//cek apakah tombol submit sudah pernah ditekan atau belum
if(isset($_POST["submit"])) {

	//cek apakah data berhasil diubah atau tidak
	if (ubah($_POST)> 0) {
		echo "
		<script>
			alert('data berhasil diubah!');
			document.location.href ='material.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal diubah!');
		</script>";
	}
}
 ?>

<html>
<head>
	<title>Ubah data material</title>
</head>
<body>
	<h1>ubah data material</h1>

	<form action=""	method="post">
		<input type="hidden" name="kode_material" value="<?= $material ["kode_material"]; ?>" >
		<ul>
			<li>
				<label for="nama_material">Nama Material :</label>
				<input type="text"	name="nama_material" id="nama_material" required value=" <?= $material ["nama_material"] ?>">
			</li>
			<li>
				<label for="part_number">Part Number :</label>
				<input type="text"	name="part_number" id="part_number" required value=" <?= $material ["part_number"] ?>">
			</li>
			<li>
				<label for="packing_list">Packing List :</label>
				<input type="text"	name="packing_list" id="packing_list" required value=" <?= $material ["packing_list"] ?>">
			</li>
			<li>
				<label for="stock">Stock :</label>
				<input type="text"	name="stock" id="stock" required value=" <?= $material ["stock"] ?>">
			</li>
			<li>
				<button type="submit"	name="submit">ubah Data!</button>
			</li>
		</ul>
		
	</form>
</body>
</html>