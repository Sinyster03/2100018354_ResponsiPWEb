<?php
echo "<head><title>My Guest Book</head></title>";
$Tanggal = date("Y-m-d");
$NamaPemesanan= $_POST['NamaPemesan'];
$NoTelepon= $_POST['NoTelepon'];
$AlamatPenerima= $_POST['AlamatPenerima'];
$NamaBarang= $_POST['NamaBarang'];
$JumlahBarang= $_POST['JumlahBarang'];
$fp = fopen("tokobangunan.txt", "a+");
fputs($fp, "$Tanggal|$NamaPemesanan|$NoTelepon|$AlamatPenerima|$NamaBarang|$JumlahBarang\n");
fclose($fp);

echo "Terimakasih Atas Pemesanan di Toko Kami<br>";
echo "<a href=tampilan.php> Isi Daftar Pemesanan</a><br>";
echo "<a href=lihat.php> Lihat Daftar Pemesanan</a><br>";
?>