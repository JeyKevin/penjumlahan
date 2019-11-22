<!DOCTYPE html>
<html>
<head>

	<title> Membuat Kalkulator Sederhana Dengan PHP </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
		
	<div class="jumbotron">
	<h1 align="center" class ="display-4">Selamat Datang Di Web Perhitungan</h1>

	</div>

	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>

	<hr>

	<div class="tampilan">
		<h2 class="judul" align="center">KALKULATOR</h2>
			<form action="hasil.php" method="post">
				<input type="text" name="bil1" autocomplete="off" placeholder="Masukan Angka" class="input1">

				<select class="opt" name="operasi">
					<option value="tambah">+</option>
					<option value="kurang">-</option>
					<option value="kali">x</option>
					<option value="bagi">/</option>
				</select>

				<input type="text" name="bil2" autocomplete="off" placeholder="Masukan Angka" class="input1">

				<input type="submit" name="hitung" value="hitung" class="tombol">

			</form>

			<br>

		
	</div>


</body>
</html>