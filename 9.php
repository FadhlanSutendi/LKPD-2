<?php
function jenisKoin($jumlahKoin){
// Array ini berisi nilai koin yang tersedia, yaitu koin dengan nominal 1000, 500, 200, dan 50.
    $koin = [1000,500,200,50];
//Array kosong ini akan digunakan untuk menyimpan jenis koin yang akan digunakan.
    $hasil = [];
// Melakukan perulangan untuk setiap nilai koin dalam array $koin
    foreach($koin as $k) {
        if($jumlahKoin >= $k) {
//Koin dengan nilai tersebut ditambahkan ke array $hasil.
            $hasil[] = $k;
            $jumlahKoin -= intdiv($jumlahKoin, $k) * $k;
        }
    }
//Fungsi ini mengembalikan array $hasil yang berisi jenis koin yang dipakai.
    return $hasil;
}
//jumlahKoin diinisialisasikan dengan nilai 1750, yaitu jumlah uang yang akan dipecah menjadi koin.
$jumlahKoin = 1750;
$jenisKoin = jenisKoin($jumlahKoin);

echo "jenis koin untuk Rp. $jumlahKoin";
//Loop foreach digunakan untuk menampilkan setiap jenis koin yang disimpan dalam array
foreach($jenisKoin as $nilai) {
    echo"<ul><li> Rp. $nilai </li></ul>";
}

?>