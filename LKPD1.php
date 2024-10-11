<?php
$string = 'selamat ulang tahun yang ke - 18!';

echo "Teks : $string<br>";

$specialKarakter = preg_match_all('/[\'^£$%&*()!}{@#~?><>,|=_+¬-]/', $string, $matches);
//fungsi preg_match_all untuk mencocokan semua pola regular expression dalam sebuah string

echo "<br>";

if ($specialKarakter > 0) {
    echo "Karakter yang mengandung simbol: " . implode(", ", $matches[0]);
    //fungsi implode untuk menggabungkan array menjadi string
} else {
    echo "Tidak terdapat simbol dalam kalimat.";
}
?>