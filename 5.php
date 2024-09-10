<?php
//$bil1 dan $bil2 adalah dua array yang masing-masing berisi kumpulan angka.
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

//untuk menggabungkan
$gabung = array_merge($bil1, $bil2);
//untuk menghapus diplikat
$urutan = array_unique($gabung);
//untuk mengurutkan bilangan
rsort($urutan);
//implode unutk menyatukan elem" dalam array menjadi satu string
echo "Hasil : " . implode(", ", $urutan);
?>