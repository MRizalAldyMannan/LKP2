<?php
date_default_timezone_set('Asia/Jakarta');
$hariIni = date("l"); //menentukan waktu asli di laptop

$totalPembelian = 120000;

$diskon = 0;

//menentukan jika hari yang terdapat di laptop yaitu hari selasa atau tuesday maka akan mendapat diskon sebesar 0.05 atau 5%
if ($hariIni === "Tuesday") {

    $diskon = 0.05;
}

//mengecek dari variable totalPembelian jika totalPembelian lebih dari 100.000 maka akan mendapat diskon sebesar 0.07 atau 7%
if ($totalPembelian > 100000) {

    $diskon = 0.07;
}



$totalSetelahDiskon = $totalPembelian - ($totalPembelian * $diskon);

echo "hari ini adalah: " . $hariIni . "<br>";
echo "Total pembelian: " . number_format($totalPembelian, 0, ',', '.') . " IDR<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total yang harus dibayar: " . number_format($totalSetelahDiskon, 0, ',', '.') . " IDR";

?>