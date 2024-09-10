<?php 
    // Array yang menyimpan daftar barang dengan nama, harga, dan jumlah yang dibeli
    $barang = [
        [
            'nama' => 'Pasta Gigi',   // Nama barang
            'harga' => 18000,         // Harga barang
            'jumlahBeli' => 1,        // Jumlah yang dibeli
        ],
        [
            'nama' => 'Sabun Mandi',
            'harga' => 5000,
            'jumlahBeli' => 3,
        ],
        [
            'nama' => 'Aloe Vera Sheet Mask',
            'harga' => 15000,
            'jumlahBeli' => 4,
        ],
    ];

    // Variabel untuk menyimpan total harga semua barang
    $totalHar = 0;

    // Tampilkan teks 'Daftar belanjaan:'
    echo "Daftar belanjaan :";

    // Buat list order list
    echo "<ol>";

    // Loop melalui setiap item di array $barang
    foreach ($barang as $item) {
        // Hitung subtotal harga untuk barang tersebut (harga * jumlah beli)
        $subTot = $item['harga'] * $item['jumlahBeli'];

        // Tambahkan subtotal ke total keseluruhan
        $totalHar += $subTot;

        // Format subtotal menjadi format angka dengan pemisah ribuan
        $formatSub = number_format($subTot, 0, ',', '.');

        // Tampilkan item daftar belanjaan dalam list dengan nama barang, jumlah beli, dan subtotal yang sudah diformat
        echo "<li>{$item['nama']} ({$item['jumlahBeli']}) : Rp {$formatSub}</li>";
    }

    // Tutup order list
    echo "</ol>";

    // Format total harga menjadi format angka dengan pemisah ribuan
    $formatTot = number_format($totalHar, 0, ',', '.');

    // Tampilkan total harga yang harus dibayar
    echo "Total harga yang harus Anda bayar adalah Rp. {$formatTot}";
?>
