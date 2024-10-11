<!DOCTYPE html>
<html>
<head>
    <title>Bintang Persegi</title>
</head>
<body>
    <?php
    //for pertama untuk membuat kolom
    for ($k = 0; $k < 2; $k++) {      
        //for kedua untuk menentukan baris
        for ($i = 0; $i < 4; $i++) {
            //for ketiga untuk menentukan berapa banyak bintang
            for ($j = 0; $j < 8; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
        echo "<br>"; 
    }
    ?>
</body>
</html>