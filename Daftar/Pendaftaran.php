<?php 

namespace Daftar;
// class 
 class Pendaftaran
 {
 	//property
 	public $nama_lengkap;
 	public $no_hp;
 	public $tempat_lahir;
 	public $tanggal_lahir;
 	public $jk;
 	public $email;
 	public $agama;
 	public $jurusan;
 	public $alamat;

 	//dataMurid
 	function dataMurid($nama_lengkap, $no_hp, $tempat_lahir, $tanggal_lahir, $jk, $email, $agama, $jurusan, $alamat)
 	{
 		$this->nama_lengkap = $nama_lengkap;
 		$this->no_hp = $no_hp;
 		$this->tempat_lahir = $tempat_lahir;
 		$this->tanggal_lahir = $tanggal_lahir;
 		$this->jk = $jk;
 		$this->email = $email;
 		$this->agama = $agama;
 		$this->jurusan = $jurusan;
 		$this->alamat = $alamat;
 	}

 	function cekDaftar()
 	{
 		if (!empty($_SESSION['daftar'])) {
 			$daftar = $_SESSION['daftar'];
 		}else {
 			$_SESSION['daftar'] = array();
 		}
 	}

 	function daftarSekolah()
 	{
 		$daftar = [
 			'nama_lengkap' => $this->nama_lengkap,
 			'no_hp' => $this->no_hp,
 			'tempat_lahir' => $this->tempat_lahir,
 			'tanggal_lahir' => $this->tanggal_lahir,
 			'jk' => $this->jk,
 			'email' => $this->email,
 			'agama' => $this->agama,
 			'jurusan' => $this->jurusan,
 			'alamat' => $this->alamat,
 		];

 		$_SESSION['daftar'][] = $daftar;
 	}
 }