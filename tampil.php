<!DOCTYPE html>
<html>
<head>
	<title>MATERIAL</title>
</head>
<body>
	<H2>TABEL MATERIAL</H2>
	<TABLE border="1">
		<tr>
			<th>kode_material</th>
			<th>nama_material</th>
			<th>part_number</th>
			<th>packing_list</th>
		</tr>
		<?php
		include "koneksi.php";
		$data =mysqli_query($koneksi, "select*from tabel_material"); while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?= $d['kode_material'];?></td>
				<td><?= $d['nama_material'];?></td>
				<td><?= $d['part_number'];?></td>
				<td><?= $d['packing_list'];?></td>

			</tr>
			<?php
}
			 ?>
	</TABLE>

</body>
</html>