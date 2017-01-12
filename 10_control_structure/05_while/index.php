<?php
/**
 * Perulangan While
 *
 * Contoh Syntax
 *
 * while (kondisi) {
 *      # kode yang akan diulangi
 * }
 *
 * kode yang berada di dalam while akan diulangi
 * jika kondisinya benar
 *
 */
$a = 1;
while ($a < 10) {
    echo $a;
    $a++; // setiap selesai menampilkan nilai $a, value $a ditambah 1
}

// Kode di atas akan menghasilkan keluaran
// 123456789
//
// Jika tidak ada $a++, maka akan menghasilkan infinite looping
// apakah operator ++ bisa diganti ?
// bisa
// tergantung kebutuhan, ada ++, -- , += , -=
