<?php

require 'function.php';

if(isset ($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query( $koneksi, "SELECT * FROM user WHERE username = '$username'" );

	//cek username
	if( mysqli_num_rows($result) === 1 ) {

		//cek password

		$row = mysqli_fetch_assoc ($result);
		if ( password_verify($password, $row["password"]) ) {
			header("Location : material.php") ;
			exit;
		}
	}


}




?>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>


<h1>Halaman Login</h1>

<form action="" method="post">
	
	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="login">	<li>Login</li></button>
		</li>
	</ul>



</form>



</body>
</html>