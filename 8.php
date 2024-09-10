<?php
//Array ini berisi beberapa nama jurusan
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
//strtoupper Mengubah setiap elemen array menjadi huruf kapital
//Fungsi array_map() digunakan untuk menerapkan fungsi strtoupper
//Fungsi array_unique() digunakan untuk menghilangkan duplikat dari array tersebut
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));
//Fungsi print_r() digunakan untuk mencetak array yang dihasilkan
print_r($uniqueJurusan);
?>