<?php
session_start();

// if(isset($_SESSION['user'])){
// 	echo "selamat datang " . $_SESSION['user'];
// }else{
// 	echo "Login dulu gan";
// }
if (isset($_GET['del'])) {
	unset($_SESSION['daftar'][$_GET['del']]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pendaftar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="background: #28719a">
	<?php if(!empty($_SESSION['daftar'])) : ?> 
	<div class="container">
		<div class="well">	
			<div class="table-responsive">
			<table action="daftarprofil.php" class="table table-bordered table-hover table-striped">
			<tr>
				<h3>Daftar Peserta :</h3">
			</tr>
				<tr style="background-color: #20B2AA">
					<td>No.Pendaftaran</td>
					<td>Nama Lengkap</td>
					<td>No.HP</td>
	   				<td>Tempat Lahir</td>
					<td>Tanggal Lahir</td>
					<td>Jenis Kelamin</td>
					<td>Email</td>
					<td>Agama</td>
					<td>Pilihan Jurusan</td>
					<td>Alamat</td>
					<td>Option</td>
				</tr>
				<?php $no = 1; ?>
				<?php foreach ($_SESSION['daftar'] as $key => $val) : ?>
					<tr:nth-of-type(2){
					style="background-color: #000"}>
						<td><?= "AF00".$no++.date('t') ?></td>
						<td><?= $val['nama_lengkap'] ?></td>
						<td><?= "+62".$val['no_hp'] ?></td>
						<td><?= $val['tempat_lahir'] ?></td>
						<td><?= $val['tanggal_lahir'] ?></td>
						<td><?= $val['jk'] ?></td>
						<td><?= $val['email'] ?></td>
						<td><?= $val['agama'] ?></td>
						<td><?= $val['jurusan'] ?></td>
						<td><?= $val['alamat'] ?></td>
						<td><a href="daftarprofil.php?del=<?=$key?>" style="background:#28719a;color: #fff;text-decoration: none;" class="btn btn-group-justified"><i class="fa fa-times" aria-hidden="true"></i></a></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<?php 
		else :
			echo "<center><img src=foto/kosong.png style=width:20%></center>";
		endif; ?>
<br>
<br>
<div class="text-center">
	<a href="logout.php" style="background:#28719a;color: #fff;text-decoration: none;"><button class="btn btn-group-sm" name="daftar" ><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button></a>
</div>

