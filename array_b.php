<html>
<head>
	<title>Pemrograman PHP dengan Array</title>
</head>
<body> 
	<?php //perintah php
	//Penulisan array dapat dibuat seperti berikut
	$nama[] = "Ully"; //membuat variabel $nama dengan array yang menyimpan string Ully
	$nama[] = "Laili"; //membuat variabel $nama dengan array yang menyimpan string Laili
	$nama[] = "Musyarofah"; //membuat variabel $nama dengan array yang menyimpan string Musyarofah
	echo $nama[1] . $nama[2] . $nama[0]; //menampilkan teks nilai variabel nama indeks ke 1, nilai variabel nama indeks ke 2, nilai variabel nama indeks ke 0 
	echo "<br>"; //menampilkan ganti baris
	//menghitung jumlah elemen array
	$jum_array = count($nama); //membuat variabel jum_array yang menyimpan nilai hitung variabel nama
	echo "jumlah elemen array = " . $jum_array; //tampilkan teks jumlah elemen array = nilai variabel jum_array
	?>
</body>
</html>