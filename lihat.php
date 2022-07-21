<?php
echo "<center>";
echo "<h1>Daftar Pemesanan Barang</h1>";
echo "<h1>Toko Jaya Abadi</h1>";
echo "<a href=pemesanan.php>Isi Form Pemesanan</a><br/><br/>";
$fp = fopen("tokobangunan.txt", "r");
echo "<table border=1 width='80%'>";

echo "<tr>
    <th>Tanggal</th>
    <th>NamaPemesan</th>
    <th>NoTelepon</th>
    <th>AlamatPenerima</th>
    <th>NamaBarang</th>
    <th>JumlahBarang</th>
</tr>";

while ($isi = fgets($fp, 200)) {
    $pisah = explode("|", $isi);
    echo "<tr>
    <td>$pisah[0]</td>
    <td>$pisah[1]</td>
    <td>$pisah[2]</td>
    <td>$pisah[3]</td>
    <td>$pisah[4]</td>
    <td>$pisah[5]</td>
  </tr>";
}

echo "</table>";
echo "</center>";
?>