<?php
// session_start();
	$user = 'admin';
	$password = '123';

	if(isset($_POST['submit'])){
		if($_POST['nama'] == $user &&
		   $_POST['password'] == $password){
		//session
		$_SESSION['user'] = $_POST['nama'];
		// memindahkan halaman
		header('Location: daftarprofil.php');
		}else{
			echo "login gagal";
		}
	}
?>

<form action="login.php" method="POST">
	<input style="background: none;border-radius: 5px;border:2px solid #fff; padding:2px" type="text" name="nama">
	<input style="background: none;border-radius: 5px;border:2px solid #fff; padding:2px" type="password" name="password">
	<input style="background: none;border-radius: 5px;padding:2px;color:#fff;border:2px solid #fff" type="submit" name="submit">
</form>