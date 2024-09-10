<?php
//variabel
$kalimat = "Selamat Ulang Tahun yang ke-17!";
// Jadi preg match all untuk menampung simbol simbol dalam variabel kalimat dan di tampung di srt
if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $kalimat, $srt)) {
//tampilan teks asli
    echo "Teks : $kalimat";
    echo "<br>";
//  implode digunakan untuk menggabungkan semua simbol yang ada di array $srt menjadi satu string.
    echo "Simbol yang terdapat pada kalimat: " . implode(', ', $srt[0]);
} else {
    echo "Teks : $kalimat";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}
?>