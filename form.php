<style type="text/css">

	body{
		background-image: url("latar.png");
		background-size: cover;
		background-repeat: no-repeat;
	}
	
	#container{
		text-align: center;
		border-radius: 10px;
		border-color: black;
		border-style: outset;
		color: black;
		width: 800px;
		height: 380px;
		margin: 130px auto;
		padding-left: 5px;
	}

</style>


<?php
	if(isset($_POST['submit'])){
		$nik = trim($_POST['nik']);
		$nama = $_POST['nama'];
		$tempat = $_POST['tempat'];
		$gol = $_POST['gol'];
		$alamat = $_POST['alamat'];
		$nomor = trim($_POST['nomor']);
		$jenis = $_POST['jenis'];
		$pekerjaan = $_POST['pekerjaan'];
		$agama = $_POST['agama'];
		$status = $_POST['status'];
		$warga = $_POST['warga'];
		$buka = fopen("penduduk.txt", "a+");

		echo "<table align='left'>";
		echo "<div id='container'>";
		if ($nik=="") {
			echo "NIK Anda Belum Diisi<br> ";
		}
		elseif (is_numeric($nik)==FALSE) {
			echo "Format NIK yang Dimasukkan Salah<br>";
		}
		if ($nama=="") {
			echo "Nama Anda Belum di isi<br>";
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
			echo "Isian Anda Salah<br>";
		}

		if ($tempat=="") {
			echo "Tempat dan Tanggal Lahir Anda belum diisi<br>";
		}
		if ($gol=="") {
			echo "Golongan Darah Anda Belum Diisi<br>";
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",$gol)) {
			echo "Golongan Darah yang Anda Inputkan Salah<br>";
		}
	
		if ($alamat=="") {
			echo "Masukkan Alamat Anda<br>";
		}
		
		if ($nomor=="") {
			echo "Harap isi nomor telpon<br>";
		}
		elseif (is_numeric($nomor)==FALSE) {
			echo "Anda Salah Memasukkan<br>";
		}
		if ($pekerjaan=="") {
			echo "Pekerjaan Belum Diisi<br>";
		}
		
		if ($agama=="") {
			echo "Agama Belum Diisi<br>";
		}

		if ($status==""){
			echo "Status Belum Diisi<br>";
		}

		if ($warga=="") {
			echo "Kewarganegaraan Anda Kosong<br><br><br>";
		}
		
		if ($nik&&$nama&&$tempat&&$gol&&$alamat&&$nomor&&$jenis&&$pekerjaan&&$agama&&$status&&$warga==TRUE) {
			fputs($buka, "$nik|$nama|$tempat|$gol|$alamat|$nomor|$jenis|$pekerjaan|$agama|$status|$warga|\n");
			fclose($buka);
			echo "<h1>Terimakasih Telah Mendaftar</h1><br><br><br><br><br><br><br><br>";
			echo "<h1>Anda Sudah Terdaftar</h1>";
			echo '<a href=tabel.php>Melihat Daftar Penduduk Terdaftar</a><br>';
		}
		echo '<a href=form.html>Kembali Ke Halaman Awal</a><br>';

		echo "<div>";
		echo "</table>";

		
	}
	
?>
