<style type="text/css">
	body{
		background-image: url("latar.png");
		background-size: cover;
		font-family: "Times New Roman", Times, serif;

	}
	table{
		font-size: 12;
	} 
</style>

<?php
	echo "<h1 align=center>Daftar Penduduk</h1>";
	$file = "penduduk.txt";
	$buka = fopen($file, "a+");
	$a=1;
	echo "<table align=center border='1' cellpadding='0' cellspacing='0'>";
	while ($nilai = fgets($buka, 200)) {
		$hasil = explode("|", $nilai);
		echo "<tr>
				<td>$a.</td>
				<td>NIK : $hasil[0]</td>
				<td>Nama : $hasil[1]</td>
				<td>Tempat/Tgl : $hasil[2]</td>
				<td>Golongan Darah : $hasil[3]</td>
				<td>Alamat : $hasil[4]</td>
				<td>No. Hp : $hasil[5]</td>
				<td>Jenis Kelamin: $hasil[6]</td>
				<td>Pekerjaan : $hasil[7]</td>
				<td>Agama : $hasil[8]</td>
				<td>Status : $hasil[9]</td>
				<td>Kewarganegaraan : $hasil[10]</td>
			  </tr>";
		$a = $a+1;	
	}
	echo "</table>";
	echo '<a href=form.html>Kembali Ke Halaman Awal</a>';
?>
