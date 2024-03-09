<?php
$input = [1, 2, 3, 4, 5];

function average($array) {
    $sum = array_sum($array);
    $count = count($array);
    if ($count > 0) {
        return $sum / $count;
    } else {
        return 0; // Mengembalikan 0 jika array kosong
    }
}

function a($array) {
    return average($array);
}
// Dalam kode di atas, fungsi average() diubah untuk menghitung rata-rata dari array yang diberikan. Fungsi a() tetap 
// sama, hanya untuk memanggil fungsi average() dengan mem-passing argumen array.
echo a($input); // Output: 3
