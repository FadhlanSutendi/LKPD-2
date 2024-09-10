<?php
//mengatur waktu menjadi 'Asia/Jakarta', memastikan bahwa tanggal dan waktu akan menggunakan waktu Jakarta.
date_default_timezone_set('Asia/Jakarta');
//menghasilkan nama hari dalam bahasa Inggris dari tanggal saat ini.
$Hari = date('l');
//mengatur total harga pembelanjaan (sebelum diskon)
$total_pembelanjaan = 130000;
//diskon diinisialisasi ke 0, yang artinya tidak ada diskon pada awalnya.
$diskon = 0;
//kondisi pertama Jika total pembelanjaan lebih dari 100.000 dan hari ini adalah Selasa, maka diskon 12% 
if ($total_pembelanjaan > 100000 && $Hari == 'Tuesday'){
    $dis = 0.12;
    $diskon = 0.12 * $total_pembelanjaan;
// Jika hari ini adalah Selasa tapi total pembelanjaan tidak lebih dari 100.000, maka diskon 5% 
//untuk membandingkan dua nilai untuk kesamaan
}else if ($Hari == 'Tuesday') {
    $dis = 0.05;
    $diskon = 0.05 * $total_pembelanjaan;
//jika total pembelanjaan lebih dari 100.000 tapi hari ini bukan Selasa, maka diskon 7% 
} else if ($total_pembelanjaan > 100000) {
    $dis = 0.07;
    $diskon = 0.07 * $total_pembelanjaan;
}
//Total yang harus dibayar dihitung dari mengurangi total pembelanjaan deangan diskon .
$total_bayar = $total_pembelanjaan - $diskon;

echo "Hari ini hari : $Hari<br>";
//menampilkan total yang harus dibayar setelah diskon.
echo "Total pembelanjaan : Rp. " . number_format($total_pembelanjaan, 0, ',', '.') . "<br>";
echo "Total yang harus dibayar : Rp. " . number_format($total_bayar, 0, ',', '.') . "<br>";
// menampilkan berapa diskon yang diterapkan.
echo "Diskon : " . $dis*100     .  "%";
?>