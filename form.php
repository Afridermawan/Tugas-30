<?php
session_start();
// session_destroy();
require __DIR__ . '/vendor/autoload.php';

use Daftar\Pendaftaran;

$pendaftaran = new Pendaftaran();
$pendaftaran->cekDaftar();

if (isset($_POST['daftar'])) {
	$pendaftaran->dataMurid($_POST['namalengkap'], $_POST['nohp'], $_POST['tempatlahir'],
	 $_POST['tanggallahir'], $_POST['jk'], $_POST['email'],
	  $_POST['agama'], $_POST['jurusan'], $_POST['alamat']);

	$pendaftaran->daftarSekolah();
}
if (isset($_GET['del'])) {
	unset($_SESSION['daftar'][$_GET['del']]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Daftar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="background: #DCDCDC">
	<div class="container">
		<div class="well">	
		<div class="form-group">
			<form action="form.php" method="POST">
			<h2 class="text-center"><i class="fa fa-pencil" aria-hidden="true"></i>Isi Formulir berikut ini !</h2>
			</div>
			<hr style="background-color: #000">
				<label>Nama Lengkap :</label>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-user"></i>
					</span>
						<input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap" required="">
				</div>
				<label>NO.HP :</label>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="+62" aria-hidden="true">+62</i>
					</span>
					<input min="0" type="number" name="nohp" class="form-control" placeholder="NO.HP" maxlength="12" required="">
				</div>
				<label>Tempat Lahir :</label>
					<input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir" required="">
				<label>Tanggal Lahir :</label>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</span>
					<input type="date" name="tanggallahir" class="form-control" placeholder="Tanggal Lahir" required="">
				</div>
				<label>Jenis Kelamin :</label>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-venus-mars" aria-hidden="true"></i>
					</span>
					<select name="jk" class="form-control">
						<option >-> Jenis Kelamin <-</option>
						<option value="laki-laki">=> Laki-Laki</option>
						<option value="perempuan">=> Perempuan</option>
					</select>
				</div>
				<label>Email :</label>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</span>
					<input type="email" name="email" class="form-control" placeholder="email" required="">
				</div>
				<label>Agama :</label>
					<input type="text" name="agama" class="form-control" placeholder="Agama" required="">
				<label>Pilihan Jurusan :</label>
				<select name="jurusan" class="form-control">
					<option >-> Pilih Jurusan <-</option>
					<option value="teknik sipil">=> Teknik Sipil</option>
					<option value="teknik informatika">=> Teknik Informatika</option>
					<option value="teknik elektro">=> Teknik Electro</option>
					<option value="teknik mesin">=> Teknik Mesin</option>
				</select>
				<label>Alamat :</label>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-address-card-o" aria-hidden="true"></i>
					</span>
					<input type="text" name="alamat" class="form-control" placeholder="Alamat" required="">
				</div>
				<br>
				<div align="center">				
					<button style="background:#28719a;color: #fff;text-decoration: none;" class="btn btn-group-sm" name="daftar">
					<i class="fa fa-sign-out" aria-hidden="true"></i>Daftarkan
					</button>
					<a href="index.php" class="btn btn-primary btn-sm" style="text-decoration: none;color: #fff"><i class="fa fa-sign-out" aria-hidden="true"></i> Kembali ke home</a>
				</div>
			</form>
			<!-- <div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<tr>
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
				</tr>
				<?php $no = 1; ?>
				<?php foreach ($_SESSION['daftar'] as $key => $val) : ?>
					<tr>
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
					</tr>
				<?php endforeach; ?>
				</table>
	<div class="text-center">
	<a href="logout.php" style="background:#28719a;color: #fff;text-decoration: none;" class="btn btn-group-sm" name="daftar" ><i class="fa fa-sign-out" aria-hidden="true"></i>Kembali ke Home</a>
    </div> -->
			</div>
		</div>
		</div>
	</body>
</html>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>