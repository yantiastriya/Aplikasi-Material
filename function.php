<?php 
//koneksi database
$koneksi = mysqli_connect("localhost","root","","material");

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
 }

 function tambah($data){
 	global $koneksi;

 	$kode_material = htmlspecialchars($data["kode_material"]);
	$nama_material = htmlspecialchars($data["nama_material"]);
	$part_number = htmlspecialchars($data["part_number"]);
	$packing_list = htmlspecialchars($data["packing_list"]);
	$stock = htmlspecialchars($data["stock"]);

	

	//query insert data
	$query = "INSERT INTO tabel_material
				VALUES
				('$kode_material','$nama_material','$part_number','$packing_list','$stock')";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
 }



 function hapus($kode_material){
 	global $koneksi;
 	mysqli_query($koneksi, "DELETE FROM tabel_material WHERE kode_material= $kode_material");
 	return mysqli_affected_rows($koneksi);
 }

 function ubah($data){
 	global $koneksi;

 	$kode_material = $data ["kode_material"] ;
	$nama_material = htmlspecialchars($data["nama_material"]);
	$part_number = htmlspecialchars($data["part_number"]);
	$packing_list = htmlspecialchars($data["packing_list"]);
	$stock = htmlspecialchars($data["stock"]);

	

	//query insert data
	$query = "update tabel_material set
				nama_material = '$nama_material',
				part_number = '$part_number',
				packing_list = '$packing_list',
				stock = '$stock'
				WHERE kode_material= '$kode_material'
				";

	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
 }


 function cari($keyword){
 	$query = "SELECT * FROM anggota
 			WHERE
 			nama LIKE '%$keyword%' OR
 			nis LIKE '%$keyword%' OR
 			jurusan LIKE '%$keyword%'
 		";
 	return query($query);
 }

 function registrasi($data){
 	global $koneksi;

 	$username = strtolower(stripslashes($data["username"]));
 	$password = mysqli_real_escape_string($koneksi,$data["password"]);
 	$password2 = mysqli_real_escape_string($koneksi,$data["password2"]);

 	
 	//cek konfirmasi password
 	if ($password !== $password2) {
 		echo "<script>
				alert('konfirmasi password tidak sesuai!');
 			</script>";
 			return false;
 	}

 	//enkripsi password
 	$password = password_hash($password, PASSWORD_DEFAULT);

 	//tambahkan user baru ke database
 	mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password')");
 	return mysqli_affected_rows($koneksi);
 }
 ?>