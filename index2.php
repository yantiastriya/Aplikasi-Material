<?php
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Material</title>
</head>
<body>
	<h1>Edit Data Material</h1>

	<form method="post" action="add.php">
		<input type="text" name="kode_material" placeholder="kode material"> <br>
		<input type="text" name="nama_material" placeholder="nama material"> <br>
		<input type="text" name="part_number" placeholder="part number"><br>
		<input type="int" name="packing_list" placeholder="Packing List"><br>
		<input type="int" name="stock" placeholder="stock"><br>
		<input type="submit" name="submit" value="Tambah Data"><br>
	</form> <br/>

  
</body>
</html>