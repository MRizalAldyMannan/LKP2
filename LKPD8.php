<?php
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"]; 
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan)); //array unique berfungsi agar menghindari penghapusan duplikat secara manual
//array_map mengubah nilai di dalam array
print_r($uniqueJurusan);
?>
