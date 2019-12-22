<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
	<input type="text" name="user">
	<input type="password" name="pass">
	<input type="submit" name="action">
	</form>
	<br><br>

	<?php 

	if (isset($_POST['action'])) {
		$username = $_POST['user'];
		$password = $_POST['pass'];

	if($username && $password == "admin"){
			echo "Login berhasil";
		
	}else if(!empty($username || $password)){
		echo "Username & password harus di isi";
	}else{

		echo "Username dan Password salah "."Login gagal";
	}
}
	?>

</body>
</html>
