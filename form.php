<style type="text/css">

	body{
		background-color: #EAE1D0;
	}
	
	#container{
		background-color: white;
		width: 500px;
		height: 200px;
		margin: 230px auto;
		padding-left: 5px;
	}

</style>


<?php
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$nomor = trim($_POST['nomor']);
		$jenis = $_POST['jenis'];
		$agama = $_POST['agama'];
		$keadaan = $_POST['keadaan'];

		echo "<table>";
		echo "<div id='container'>";
		if ($nama=="") {
			echo "Nama Anda Belum di isi<br>";
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
			echo "Isian Anda Salah<br>";
		}
		else {
			echo "Nama : ".$nama."<br>";
		}

		if ($alamat=="") {
			echo "Masukkan Alamat Anda<br>";
		}
		else{
			echo "Alamat : ".$alamat."<br>";
		}

		if ($nomor=="") {
			echo "Harap isi nomor telpon<br>";
		}
		elseif (is_numeric($nomor)==FALSE) {
			echo "Anda Salah Memasukkan<br>";
		}
		else{
			echo "Nomor : ".$nomor."<br>";
		}
		
		echo "Jenis Kelamin : ".$jenis."<br>";
		
		
		if ($agama=="") {
			echo "Agama Belum Diisi<<br>";
		}
		else{
			echo "Agama : ".$agama."<br>";
		}

		if ($keadaan=="") {
			echo "Keadaan Anda Belum Diisi<br>";
		}
		else{
			echo "Penjelasaan Keadaan : ".$keadaan."<br>";
		}	
	}
	echo "<div>";
	echo "</table>";
?>