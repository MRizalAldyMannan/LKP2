<?php
//buat dua variable 
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];


echo "hasil :";

$gabung = array_unique(array_merge($bill1, $bill2)); //array_unique berfungsi agar yang terduplikat tidak tertulis
//array_merge berfungsi untuk meyatukan variabel


rsort($gabung);//rsort berfungsi untuk mengurutkan angka dari yang terbesar 


$output = implode(', ', $gabung); //imlode berfunsi untuk menggabungkan array menjadi string


echo $output;
?>