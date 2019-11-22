<!DOCTYPE html>
<html>
<head>
	<title> Membuat Kalkulator Sederhana Dengan PHP </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">

</head>
<body>

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

	<br>
	<hr>
	<div class="tampilan" align="center">
		<h1>Hasil nya adalah : </h1>
	


		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="" class="bil">
		<?php } ?>			

	</div>

	<hr>

</body>
</html>