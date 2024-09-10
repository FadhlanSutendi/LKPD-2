<?php
//Loop yang pertama ini akan berjalan sebanyak 2 blok.
for ($b = 0; $b < 2; $b++) { 
//Loop yang ke dua ini tujuannya untuk mencetak 4 baris bintang.
    for ($i = 0; $i < 4; $i++) { 
//Setiap kali loop yang ketiga ini berjalan, loop ini akan mencetak suatu bintang secara horizontal.
        for ($p = 0; $p < 8; $p++) { 
            echo "*";
        }
//Baris kosong ini digunakan untuk memisahkan dua kelompok bintang yang akan dicetak.
        echo "<br>";
    }
//untuk memisahkan dua kelompok bintang yang akan dicetak.
    echo "<br>";
}
?>