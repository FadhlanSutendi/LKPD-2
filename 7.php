<?php
// untuk mempersingkat teks jika panjang teks lebih dari batas.
function shortenText($text, $maxLength = 50) {
//Fungsi mengecek apakah panjang string dari $text melebihi $maxLength
//strlen untuk menghitung jumlah huruf
    if (strlen($text) > $maxLength) {
//Fungsi memotong teks menggunakan substr, yang mengambil 50 karakter pertama dari teks.
        return substr($text, 0, $maxLength) . '.....';
    }
    
    return $text;
}
//$text adalah string yang akan diproses oleh fungsi.
$text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, aliquam voluptas repellendus at ea nam provident. Labore saepe obcaecati rerum recusandae sequi delectus quisquam unde ab quidem? Vel, pariatur debitis?";
//Variabel $hasil menyimpan output dari fungsi shortenText($text) setelah teks dipotong 
$hasil = shortenText($text);
//Fungsi echo menampilkan teks
echo "<b>Kalimat :</b>", $hasil;
?>