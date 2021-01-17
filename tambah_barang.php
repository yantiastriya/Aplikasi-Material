<?php 

require 'function.php';

//cek apakah tombol submit sudah pernah ditekan atau belum
if(isset($_POST["submit"])) {
	//cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST)> 0) {
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href ='material.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
		</script>";
	}
}
 ?>

<html>
<head>
	<title>Input Material</title>
</head>
<body>
	<h1>Input Material</h1>

	<form action=""	method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="kode_material">Kode Material :</label>
				<input type="text"	name="kode_material" id="kode_material">
			</li>
			<li>
				<label for="nama_material">Nama Material :</label>
				<input type="text"	name="nama_material" id="nama_material">
			</li>
			<li>
				<label for="part_number">Part Number :</label>
				<input type="text"	name="part_number" id="part_number">
			</li>
			<li>
				<label for="packing_list">Packing List :</label>
				<input type="text"	name="packing_list" id="packing_list">
			</li>
			<li>
				<label for="stock">Stock :</label>
				<input type="text"	name="stock" id="stock">
			</li>
			<li>
				<button type="submit"	name="submit">Tambah Data!</button>
			</li>
		</ul>
		
	</form>
</body>
</html>