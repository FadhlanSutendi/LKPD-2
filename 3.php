<?php
//Variabel $b diinisialisasi dengan nilai 90.
$b = 90;
//Looping for digunakan untuk menjalankan perulangan sebanyak 30 kali,nilai awal dari $i yaitu 1 dan akan bertambah sampai 30
for ($i = 1; $i <= 30; $i++) {
//Kondisi if mengecek apakah 90 habis dibagi oleh $i. Operator modulus %  untuk mendapatkan sisa hasil bagi.
    if (90 % $i == 0) {
// ini fungsinya untuk mencetak output.
        echo $b . " : " . $i . " = ".($b / $i);
        echo "<br>";
    }
}
?>

