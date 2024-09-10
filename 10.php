<?php
//Fungsi cekJawaban() menerima tiga parameter: Nama siswa yang sedang diperiksa.
                                              //Array yang berisi jawaban siswa.
                                              //Array yang berisi jawaban yang benar.
function cekJawaban($nama, $jawabanSiswa, $jawabanBenar) {
    $jumlahBenar = 0;

// Menghitung jumlah jawaban siswa yang  benar
    foreach ($jawabanSiswa as $index => $jawaban) {
        if ($jawaban === $jawabanBenar[$index]) {
            $jumlahBenar++;
        }
    }
//Jumlah jawaban yang salah dihitung dengan mengurangi jumlah jawaban benar dari total jumlah soal
    $jumlahSalah = count($jawabanBenar) - $jumlahBenar;

// Output hasil pengecekan
    echo "Nama : $nama";
    echo "<br>" ;
    echo "Jumlah Jawaban Benar : $jumlahBenar";
    echo "<br>" ;
    echo "Jumlah Jawaban Salah : $jumlahSalah";
}

//$namaSiswa berisi nama siswa, dalam hal ini adalah "Putri".
$namaSiswa = "Putri";
//$jawabanSiswa adalah array yang berisi jawaban yang diberikan oleh Putri.
$jawabanSiswa = ['A','B','C','C','A','A','E','C','E','E'];
//$jawabanBenar adalah array yang berisi jawaban yang benar untuk setiap soal.
$jawabanBenar = ['A','D','C','C','B','A','E','B','A','E',];
//Fungsi cekJawaban dipanggil dengan memasukkan nama siswa, jawaban siswa, dan jawaban yang benar sebagai argumen.
cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
?>