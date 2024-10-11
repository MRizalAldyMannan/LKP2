<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Pembagi 90</title>
</head>
<body>
    <h1>Bilangan yang Membagi Habis 90 (1-30)</h1>
    <ul>
        <?php
        //membuat variable bilangan dengan hasil 90
        $bilangan = 90;
        //tambahkan variable i didalam for untuk melakukan pembagian
        //fungsi ++ agar memberhentikan looping output
        for ($i = 1; $i <= 30; $i++) {
            if ($bilangan % $i == 0) {
                $hasil = $bilangan / $i;
                echo "<li>$bilangan : $i = $hasil</li>";
            }
        }
        ?>
    </ul>
</body>
</html>