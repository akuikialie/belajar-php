<?php
/**
 * Perulangan Do - While
 *
 * Contoh Syntax
 *
 * do {
 *      // Kode yang akan diulangi
 * }
 * while (kondisi);
 *
 * kurang lebih sama dengan perulangan while, tetapi
 * berbeda tempat pengecekan
 *
 * do-while -> dijalankan terlebih dahulu baru di cek, jika benar diulangi
 * while -> dicek terlebih dulu baru dijalankan
 *
 * kode yang berada di dalam while akan diulangi
 * jika kondisinya benar
 *
 */
$a = 1;

do {
    echo $a;
    $a++; // setiap selesai menampilkan nilai $a, value $a ditambah 1
} while ($a < 10);

// Kode di atas juga akan menghasilkan keluaran
// 123456789
